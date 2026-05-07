<?php

namespace App\Command;

use App\Repository\RecetteRepository;
use App\Repository\CategorieRecetteRepository;
use App\Repository\IngredientRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:recipehub:stats',
    description: 'Affiche les statistiques de la plateforme de recettes',
)]
class RecipeHubStatsCommand extends Command
{
    public function __construct(
        private RecetteRepository $recetteRepo,
        private CategorieRecetteRepository $catRepo,
        private IngredientRepository $ingredientRepo
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption('detail', null, InputOption::VALUE_NONE, 'Affiche le détail par catégorie')
            ->addOption('top', null, InputOption::VALUE_OPTIONAL, 'Affiche le top N des recettes les plus longues', 3);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('📊 RecipeHub - Statistiques de la Plateforme');

        // 1. الإحصائيات العامة
        $totalRecettes = $this->recetteRepo->count([]);
        // افتراضياً: سنعتبر الوصفات التي ليس لها عنوان "برافو" (بإمكانك تعديل المنطق حسب الـ Entity متاعك)
        $totalIngredients = $this->ingredientRepo->count([]);

        $io->section('Résumé Global');
        $io->listing([
            "Nombre total de recettes : $totalRecettes",
            "Nombre total d'ingrédients : $totalIngredients",
            "Temps de préparation moyen : " . round($this->recetteRepo->createQueryBuilder('r')->select('AVG(r.tempsPreparation)')->getQuery()->getSingleScalarResult()) . " min"
        ]);

        // 2. التوزيع حسب الصعوبة (Répartition par difficulté)
        $io->section('Répartition par Difficulté');
        $diffStats = [];
        for ($i = 1; $i <= 5; $i++) {
            $count = $this->recetteRepo->count(['difficulte' => $i]);
            if ($count > 0) $diffStats[] = ["Niveau $i", $count];
        }
        $io->table(['Difficulté', 'Nombre'], $diffStats);

        // 3. خيار --detail : التوزيع حسب الفئة
        if ($input->getOption('detail')) {
            $io->section('Détail par Catégorie');
            $categories = $this->catRepo->findAll();
            $catData = [];
            foreach ($categories as $cat) {
                $catData[] = [$cat->getNom(), count($cat->getRecettes())];
            }
            $io->table(['Catégorie', 'Nombre de Recettes'], $catData);
        }

        // 4. خيار --top=N : أطول الوصفات
        $n = (int) $input->getOption('top');
        $io->section("Top $n des recettes les plus longues (Temps total)");
        $topRecettes = $this->recetteRepo->createQueryBuilder('r')
            ->select('r.titre, (r.tempsPreparation + r.tempsCuisson) as totalTime')
            ->orderBy('totalTime', 'DESC')
            ->setMaxResults($n)
            ->getQuery()
            ->getResult();

        $topData = [];
        foreach ($topRecettes as $res) {
            $topData[] = [$res['titre'], $res['totalTime'] . ' min'];
        }
        $io->table(['Recette', 'Temps Total'], $topData);

        $io->success('Statistiques générées avec succès !');

        return Command::SUCCESS;
    }
}
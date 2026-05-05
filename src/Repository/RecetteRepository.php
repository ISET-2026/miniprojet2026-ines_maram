<?php

namespace App\Repository;

use App\Entity\Recette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\CategorieRecette;
use App\Entity\TagRecette;


/**
 * @extends ServiceEntityRepository<Recette>
 */
class RecetteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recette::class);
    }
    
// RecetteRepository
public function findByFilters(?string $titre, ?CategorieRecette $cat, ?string $diff, ?TagRecette $tag): array
{
    $qb = $this->createQueryBuilder('r');

    if ($titre) {
        $qb->andWhere('r.titre LIKE :titre')
           ->setParameter('titre', '%' . $titre . '%');
    }
    if ($cat) {
        $qb->andWhere('r.categorie = :cat')
           ->setParameter('cat', $cat);
    }
    if ($diff) {
        $qb->andWhere('r.difficulte = :diff')
           ->setParameter('diff', $diff);
    }
    if ($tag) {
        $qb->innerJoin('r.tags', 't')
           ->andWhere('t = :tag')
           ->setParameter('tag', $tag);
    }

    return $qb->orderBy('r.dateCreation', 'DESC')
              ->getQuery()->getResult();
}

public function findLastPublished(int $limit = 10): array
{
return $this->createQueryBuilder('r')
        ->andWhere('r.publiee = :val') // Thabbet f-ism el champ kima fil base
        ->setParameter('val', true)
        ->orderBy('r.dateCreation', 'DESC')
        ->setMaxResults($limit) // Hne t-9ollou i-limit-i el 3dad
        ->getQuery()
        ->getResult();
}
//    /**
//     * @return Recette[] Returns an array of Recette objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Recette
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
>>>>>>> 1056446cbb35853e2b0c46f92514fd70f660b97b
}

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
            $qb->join('r.tags', 't')
               ->andWhere('t.id = :tagId')
               ->setParameter('tagId', $tag->getId());
        }

        $qb->orderBy('r.dateCreation', 'DESC');

        return $qb->getQuery()->getResult();
    }
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

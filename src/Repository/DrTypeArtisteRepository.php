<?php

namespace App\Repository;

use App\Entity\DrTypeArtiste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DrTypeArtiste|null find($id, $lockMode = null, $lockVersion = null)
 * @method DrTypeArtiste|null findOneBy(array $criteria, array $orderBy = null)
 * @method DrTypeArtiste[]    findAll()
 * @method DrTypeArtiste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrTypeArtisteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DrTypeArtiste::class);
    }

    // /**
    //  * @return DrTypeArtiste[] Returns an array of DrTypeArtiste objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DrTypeArtiste
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

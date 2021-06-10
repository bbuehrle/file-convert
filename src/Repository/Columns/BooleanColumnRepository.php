<?php

namespace App\Repository\Columns;

use App\Entity\Columns\BooleanColumn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BooleanColumn|null find($id, $lockMode = null, $lockVersion = null)
 * @method BooleanColumn|null findOneBy(array $criteria, array $orderBy = null)
 * @method BooleanColumn[]    findAll()
 * @method BooleanColumn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BooleanColumnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BooleanColumn::class);
    }

    // /**
    //  * @return BooleanColumn[] Returns an array of BooleanColumn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BooleanColumn
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

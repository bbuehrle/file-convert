<?php

namespace App\Repository\Columns;

use App\Entity\Columns\DateColumn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DateColumn|null find($id, $lockMode = null, $lockVersion = null)
 * @method DateColumn|null findOneBy(array $criteria, array $orderBy = null)
 * @method DateColumn[]    findAll()
 * @method DateColumn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DateColumnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DateColumn::class);
    }

    // /**
    //  * @return DateColumn[] Returns an array of Date objects
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
    public function findOneBySomeField($value): ?Date
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

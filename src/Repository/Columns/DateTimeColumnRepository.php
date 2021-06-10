<?php

namespace App\Repository\Columns;

use App\Entity\Columns\DateTimeColumn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DateTimeColumn|null find($id, $lockMode = null, $lockVersion = null)
 * @method DateTimeColumn|null findOneBy(array $criteria, array $orderBy = null)
 * @method DateTimeColumn[]    findAll()
 * @method DateTimeColumn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DateTimeColumnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DateTimeColumn::class);
    }

    // /**
    //  * @return DateTimeColumn[] Returns an array of DateTime objects
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
    public function findOneBySomeField($value): ?DateTime
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

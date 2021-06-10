<?php

namespace App\Repository\Columns;

use App\Entity\Columns\CurrencyColumn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CurrencyColumn|null find($id, $lockMode = null, $lockVersion = null)
 * @method CurrencyColumn|null findOneBy(array $criteria, array $orderBy = null)
 * @method CurrencyColumn[]    findAll()
 * @method CurrencyColumn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CurrencyColumnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CurrencyColumn::class);
    }

    // /**
    //  * @return CurrencyColumn[] Returns an array of CurrencyColumn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CurrencyColumn
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

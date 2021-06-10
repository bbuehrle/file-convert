<?php

namespace App\Repository\Columns;

use App\Entity\Columns\IntegerColumn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IntegerColumn|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntegerColumn|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntegerColumn[]    findAll()
 * @method IntegerColumn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntegerColumnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntegerColumn::class);
    }

    // /**
    //  * @return IntegerColumn[] Returns an array of IntegerColumn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IntegerColumn
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

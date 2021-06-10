<?php

namespace App\Repository\Columns;

use App\Entity\Columns\TextColumn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TextColumn|null find($id, $lockMode = null, $lockVersion = null)
 * @method TextColumn|null findOneBy(array $criteria, array $orderBy = null)
 * @method TextColumn[]    findAll()
 * @method TextColumn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextColumnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextColumn::class);
    }

    // /**
    //  * @return TextColumn[] Returns an array of Text objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Text
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

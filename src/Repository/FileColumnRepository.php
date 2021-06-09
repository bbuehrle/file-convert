<?php

namespace App\Repository;

use App\Entity\FileColumn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FileColumn|null find($id, $lockMode = null, $lockVersion = null)
 * @method FileColumn|null findOneBy(array $criteria, array $orderBy = null)
 * @method FileColumn[]    findAll()
 * @method FileColumn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FileColumnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FileColumn::class);
    }

    // /**
    //  * @return FileColumn[] Returns an array of FileColumn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FileColumn
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

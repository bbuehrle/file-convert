<?php

namespace App\Repository;

use App\Entity\FileSpecification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FileSpecification|null find($id, $lockMode = null, $lockVersion = null)
 * @method FileSpecification|null findOneBy(array $criteria, array $orderBy = null)
 * @method FileSpecification[]    findAll()
 * @method FileSpecification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FileSpecificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FileSpecification::class);
    }

    public function findOneById($value)
    {
        return $this->createQueryBuilder('f')
            ->addSelect('c')
            ->innerJoin('f.columns', 'c')
            ->andWhere('f.id = :id')
            ->setParameter('id', $value)
            ->orderBy('f.id', 'ASC')
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }

    // /**
    //  * @return FileSpecification[] Returns an array of FileSpecification objects
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
    public function findOneBySomeField($value): ?FileSpecification
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

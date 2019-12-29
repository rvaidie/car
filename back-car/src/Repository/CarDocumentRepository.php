<?php

namespace App\Repository;

use App\Entity\CarDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CarDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarDocument[]    findAll()
 * @method CarDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarDocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarDocument::class);
    }

    // /**
    //  * @return CarDocument[] Returns an array of CarDocument objects
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
    public function findOneBySomeField($value): ?CarDocument
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

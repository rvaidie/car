<?php

namespace App\Repository;

use App\Entity\CarManufacturer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CarManufacturer|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarManufacturer|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarManufacturer[]    findAll()
 * @method CarManufacturer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarManufacturerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarManufacturer::class);
    }

    // /**
    //  * @return CarManufacturer[] Returns an array of CarManufacturer objects
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
    public function findOneBySomeField($value): ?CarManufacturer
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

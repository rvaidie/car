<?php

namespace App\Repository;

use App\Entity\CarUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CarUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarUser[]    findAll()
 * @method CarUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarUser::class);
    }

    // /**
    //  * @return CarUser[] Returns an array of CarUser objects
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
    public function findOneBySomeField($value): ?CarUser
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

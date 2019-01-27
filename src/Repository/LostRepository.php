<?php

namespace App\Repository;

use App\Entity\Lost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Lost|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lost|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lost[]    findAll()
 * @method Lost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LostRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Lost::class);
    }

    // /**
    //  * @return Lost[] Returns an array of Lost objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lost
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

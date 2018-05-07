<?php

namespace App\Repository;

use App\Entity\Suit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Suit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Suit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Suit[]    findAll()
 * @method Suit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Suit::class);
    }

//    /**
//     * @return Suit[] Returns an array of Suit objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Suit
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

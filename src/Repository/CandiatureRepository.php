<?php

namespace App\Repository;

use App\Entity\Candiature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Candiature>
 *
 * @method Candiature|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candiature|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candiature[]    findAll()
 * @method Candiature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandiatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candiature::class);
    }

//    /**
//     * @return Candiature[] Returns an array of Candiature objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Candiature
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

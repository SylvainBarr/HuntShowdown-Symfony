<?php

namespace App\Repository;

use App\Entity\LegendaryHunter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LegendaryHunter>
 *
 * @method LegendaryHunter|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegendaryHunter|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegendaryHunter[]    findAll()
 * @method LegendaryHunter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegendaryHunterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegendaryHunter::class);
    }

    public function add(LegendaryHunter $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LegendaryHunter $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return LegendaryHunter[] Returns an array of LegendaryHunter objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LegendaryHunter
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\LegendaryConsumable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LegendaryConsumable>
 *
 * @method LegendaryConsumable|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegendaryConsumable|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegendaryConsumable[]    findAll()
 * @method LegendaryConsumable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegendaryConsumableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegendaryConsumable::class);
    }

    public function add(LegendaryConsumable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LegendaryConsumable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return LegendaryConsumable[] Returns an array of LegendaryConsumable objects
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

//    public function findOneBySomeField($value): ?LegendaryConsumable
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

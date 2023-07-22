<?php

namespace App\Repository;

use App\Entity\LegendaryWeaponSkin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LegendaryWeaponSkin>
 *
 * @method LegendaryWeaponSkin|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegendaryWeaponSkin|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegendaryWeaponSkin[]    findAll()
 * @method LegendaryWeaponSkin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegendaryWeaponSkinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegendaryWeaponSkin::class);
    }

    public function add(LegendaryWeaponSkin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LegendaryWeaponSkin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return LegendaryWeaponSkin[] Returns an array of LegendaryWeaponSkin objects
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

//    public function findOneBySomeField($value): ?LegendaryWeaponSkin
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\SubCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubCategory[]    findAll()
 * @method SubCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubCategory::class);
    }

    // /**
    //  * @return SubCategory[] Returns an array of SubCategory objects
    //  */

    public function findSubCategoryById($value)
    {
        return $this->createQueryBuilder('s')
            ->select('s.id', 's.name', 's.nameEn', 's.description', 's.descriptionEn', 's.imageUrl',)
            ->where('s.id = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->getQuery()
            ->getResult();
    }


    /*
    public function findOneBySomeField($value): ?SubCategory
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

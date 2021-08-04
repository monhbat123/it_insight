<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */

    public function getAvailableProducts($currentPage, $limit)
    {
        $query = $this->createQueryBuilder('a')
            ->select('a.id', 'a.name', 'a.nameEn', 'a.description', 'a.descriptionEn', 'a.imageUrl', 'cat.id AS category_id', 'subcat.id AS sub_category_id', 'brand.id AS brand_id')
            ->andWhere('a.available = :isAvailable')
            ->setParameter('isAvailable', true)
            ->innerJoin('a.Category', 'cat')
            ->innerJoin('a.Brand', 'brand')
            ->innerJoin('a.SubCategory', 'subcat')
            ->getQuery();
        $paginator = $this->paginate($query, $currentPage, $limit);

        return $paginator;
    }
    public function paginate($dql, $page, $limit)
    {
        $paginator = new Paginator($dql);
        $paginator->setUseOutputWalkers(false);

        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }
}

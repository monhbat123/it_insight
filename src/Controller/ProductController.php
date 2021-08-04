<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProductRepository;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    public function indexAction(ProductRepository $repository, $currentPage, $limit)
    {

        $em = $repository->getAvailableProducts($currentPage, $limit);
        return $this->json($em, Response::HTTP_OK);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProductRepository;

class ProductController extends AbstractController
{
    public function indexAction(ProductRepository $repository)
    {
        $product = $repository->getAvailableProducts();
        return $this->json($product);
    }
}

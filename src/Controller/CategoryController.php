<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function indexAction(CategoryRepository $repository, $id)
    {
        $product = $repository->findByCategoryId($id);
        return $this->json($product, Response::HTTP_OK);
    }
}

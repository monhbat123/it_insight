<?php

namespace App\Controller;

use App\Repository\SubCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SubCategoryController extends AbstractController
{
    public function indexAction(SubCategoryRepository $repository, $id)
    {
        $product = $repository->findSubCategoryById($id);
        return $this->json($product, Response::HTTP_OK);
    }
}

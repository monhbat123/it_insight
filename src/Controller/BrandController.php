<?php

namespace App\Controller;

use App\Repository\BrandRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends AbstractController
{
    public function indexAction(BrandRepository $repository, $id)
    {
        $product = $repository->findByBrandId($id);
        return $this->json($product, Response::HTTP_OK);
    }
}

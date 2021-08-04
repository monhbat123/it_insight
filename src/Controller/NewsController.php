<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends AbstractController
{
    public function indexAction(NewsRepository $repository)
    {
        $product = $repository->getPublishedPosts();
        return $this->json($product, Response::HTTP_OK);
    }
}

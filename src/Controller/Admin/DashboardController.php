<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Brand;
use App\Entity\Category;
use App\Entity\SubCategory;
use App\Entity\Product;
use App\Entity\News;
use App\Entity\NewsTag;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('It Insight');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Төрөл', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Жижиг төрөл', 'fas fa-list', SubCategory::class);
        yield MenuItem::linkToCrud('Брэнд', 'fas fa-list', Brand::class);
        yield MenuItem::linkToCrud('Бараа', 'fas fa-list', Product::class);
        yield MenuItem::linkToCrud('Мэдээ төрөл', 'fas fa-list', NewsTag::class);
        yield MenuItem::linkToCrud('Мэдээ', 'fas fa-list', News::class);
    }
}

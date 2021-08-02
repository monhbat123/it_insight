<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BrandCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Brand::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Нэр'),
            TextField::new('nameEn', 'Нэр (English)'),
            TextField::new('imageUrl', 'Зурагний URL'),
            TextEditorField::new('description', 'Тайлбар'),
            TextEditorField::new('descriptionEn', 'Тайлбар (English)'),
        ];
    }
}

<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\DomCrawler\Field\ChoiceFormField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Нэр'),
            TextField::new('nameEn', 'Нэр (English)'),
            TextField::new('imageUrl', 'Зурагний URL'),
            AssociationField::new('Category', 'Төрөл'),
            AssociationField::new('SubCategory', 'Жижиг төрөл'),
            AssociationField::new('Brand', 'Брэнд'),
            BooleanField::new('available', 'Байгаа эсэх'),
            TextEditorField::new('description', 'Тайлбар'),
            TextEditorField::new('descriptionEn', 'Тайлбар (English)'),

        ];
    }
}

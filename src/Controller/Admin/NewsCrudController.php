<?php

namespace App\Controller\Admin;

use App\Entity\News;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class NewsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return News::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('title', 'Нэр'),
            TextEditorField::new('titleEn', 'Нэр (English)'),
            BooleanField::new('published', 'Нийтлэх'),
            AssociationField::new('Tag'),
            UrlField::new('imageUrl', 'Зурагний URL'),
            TextEditorField::new('post', 'Тайлбар'),
            TextEditorField::new('postEn', 'Тайлбар (English)'),
            DateTimeField::new('createdAt', 'Нийтлэгдсэн огноо')
        ];
    }
}

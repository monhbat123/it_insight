<?php

namespace App\Controller\Admin;

use App\Entity\NewsTag;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NewsTagCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NewsTag::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Нэр'),
            TextField::new('nameEn', 'Нэр (English)'),
        ];
    }
}

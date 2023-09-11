<?php

namespace App\Controller\Admin;

use App\Entity\ProductCondition;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductConditionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductCondition::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}

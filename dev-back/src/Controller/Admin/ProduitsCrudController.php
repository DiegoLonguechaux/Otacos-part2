<?php

namespace App\Controller\Admin;

use App\Entity\Produits;
use App\Entity\ProduitsCategorie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class ProduitsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produits::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            NumberField::new('price'),
            TextField::new('description'),
            TextField::new('Image'),
            AssociationField::new('produitCategorie'),
            AssociationField::new('options')->setFormTypeOptions(['by_reference' => false]),
        ];
    }
    
}

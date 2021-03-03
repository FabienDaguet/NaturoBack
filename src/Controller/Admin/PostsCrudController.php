<?php

namespace App\Controller\Admin;

use App\Entity\Posts;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class PostsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Posts::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Numéro')->onlyOnIndex(),
            DateField::new('postDate', 'Date de Publication')->onlyOnIndex(),
            Field::new('imageFile')
                ->setFormType(VichImageType::class)
                ->onlyOnDetail(),
            ImageField::new('postImg','image')
            ->setBasePath($this->getParameter('app.path.upload_img'))
            ->setUploadDir('public\upload\img')
            ->onlyOnForms(),
            TextField::new('postTitle', 'Titres'),
            TextareaField::new('postContent', 'Article')
            ->onlyOnForms(),
            AssociationField::new('postCategory', 'Catégory'),
            /*AssociationField::new('postAuthor', 'Auteur')
            ->onlyWhenCreating(),*/
        ];
    }
    
}

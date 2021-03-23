<?php

namespace App\Controller\Admin;

use App\Entity\Posts;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
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

        $imageFile = Field::new('imageFile', 'Image') ->setFormType(VichImageType::class);
        $image =  ImageField::new('postImg','Image')->setBasePath($this->getParameter('app.path.upload_img'));

        $fields = [
            IdField::new('id', 'Numéro')->onlyOnIndex(),
            DateField::new('postDate', 'Date de Publication')->onlyOnIndex(),
            TextField::new('postTitle', 'Titre'),
            TextareaField::new('postContent', 'Article')
            ->onlyOnForms(),
            AssociationField::new('postCategory', 'Catégorie'),
        ];
        
        if ($pageName == Crud::PAGE_INDEX) {
            $fields[] = $image;
        } else {
            $fields[] = $imageFile;
        }
        return $fields;
    }
    
}

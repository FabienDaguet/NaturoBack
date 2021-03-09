<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Posts;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/vitalité", name="admin")
     */
    public function index(): Response
    {
        return $this->render('bundles/easyadminBundle/welcome.html.twig'); //On défini le chemin de notre vue personnalisé.
        //return parent::index(); Vue par default
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle("Vitalité ô naturel'l.b"); //On défini le titre du backoffice
    }

    public function configureMenuItems(): iterable //Creation de notre menus
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Articles', 'fas fa-newspaper', Posts::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-paperclip', Category::class);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/histoire", name="history")
     */
    public function history(): Response
    {
        return $this->render('pages/history.html.twig');
    }

    /**
     * @Route("/Qui-suis-je", name="aboutMe")
     */
    public function aboutME(): Response
    {
        return $this->render('pages/aboutMe.html.twig');
    }

    /**
     * @Route("/séance", name="seance")
     */
    public function seance(): Response
    {
        return $this->render('pages/seance.html.twig');
    }

    /**
     * @Route("/tarifs", name="prices")
     */
    public function prices(): Response
    {
        return $this->render('pages/prices.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }
}

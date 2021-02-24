<?php

namespace App\Controller;

use App\Form\MailerFormType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

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
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(MailerFormType::class);
        $contact = $form->handleRequest($request);

        //dd($contact);
        //Si le formulaire est envoyé et correctement remplis
        if ($form->isSubmitted() && $form->isValid()) {
            //on créeer le mail
            $email = (new TemplatedEmail())
            ->from($contact->get('email')->getData())
            ->to('you@example.com')
            ->subject($contact->get('objet')->getData())
            ->htmlTemplate('email/contact.html.twig')
            ->context([
                'objet' => $contact->get('objet')->getData(),
                'name' => $contact->get('name')->getData(),
                'phone' => $contact->get('phone')->getData(),
                'mail' => $contact->get('email')->getData(),
                'message' => $contact->get('message')->getData(),
            ]);  
            //on envoie le mail
            $mailer->send($email);
            
            //on confirme et redirige
            $this->addFlash('success', 'Votre email à bien été envoyé');
            return $this->redirectToRoute('index');
        }

        return $this->render('pages/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

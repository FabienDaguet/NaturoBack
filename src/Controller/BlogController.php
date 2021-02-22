<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Repository\CategoryRepository;
use App\Repository\PostsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(PostsRepository $postsRepository, CategoryRepository $categoryRepository, Request $request, PaginatorInterface $paginator): Response
    {
        //$posts = $postsRepository->findAll();
        //dd($posts);

        $donnees = $postsRepository->findBy([],['postDate' => 'desc']);
        $lastPosts = $paginator->paginate(
            $donnees, //On passe les données
            $request->query->getInt('page', 1), //Numéro de la page, 1 par defaut
            5
        );
        $allCategory = $categoryRepository->findallCategory();
        //dd($category);
        //dd($lastPosts);
        return $this->render('blog/blog.html.twig', [
            'lastPosts' => $lastPosts,
            'allCategory' => $allCategory 
        ]);
    }

    /**
     * @Route("/blog/article/{slug}", name="post", methods={"GET"})
     */
    public function post(Posts $posts, PostsRepository $postsRepository, $slug): Response
    {
        $posts = $postsRepository->findOneBy(['slug' => $slug]);
        //f(!$posts){
        // Si aucun article n'est trouvé, nous créons une exception
        //throw $this->createNotFoundException('L\'article n\'existe pas');
        //}
        //dd($posts);
        return $this->render('blog/post.html.twig', [
            'post' => $posts
        ]);
    }
}

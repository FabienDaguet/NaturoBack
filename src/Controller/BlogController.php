<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Entity\Category;
use App\Repository\PostsRepository;
use App\Repository\CategoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(PostsRepository $postsRepository, CategoryRepository $categoryRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $donnees = $postsRepository->findBy([], ["postDate" => "DESC"]);
        $lastPosts = $paginator->paginate(
            $donnees, //On passe les données
            $request->query->getInt('page', 1), //Numéro de la page, 1 par defaut
            5
        );
        $allCategory = $categoryRepository->findAll();
        //dd($lastPosts);
        return $this->render('blog/blog.html.twig', [
            'lastPosts' => $lastPosts,
            'allCategory' => $allCategory 
        ]);
    }



    /**
     * @Route("/blog/{slug}", name="category", methods={"GET"})
     */
    public function category(PostsRepository $postsRepository, Category $category , Request $request, PaginatorInterface $paginator, $slug): Response
    {
        $donnees = $postsRepository->findPostByCat($slug);
        $lastPosts = $paginator->paginate(
            $donnees,
            $request->query->getInt('page', 1), 
            5
        );
        //dd($lastPosts);
        //dd($category);
        return $this->render('blog/category.html.twig', [
            'lastPosts' => $lastPosts,
            'category' => $category
        ]);
    }



    /**
     * @Route("/blog/article/{slug}", name="post", methods={"GET"})
     */
    public function post(Posts $posts): Response
    {
        //dd($posts);
        return $this->render('blog/post.html.twig', [
            'post' => $posts
        ]);
    }
}

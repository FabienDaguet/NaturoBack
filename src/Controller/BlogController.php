<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Repository\CategoryRepository;
use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(PostsRepository $postsRepository, CategoryRepository $categoryRepository): Response
    {
        //$posts = $postsRepository->findAll();
        //dd($posts);

        $lastPosts = $postsRepository->findLastPosts(5);
        $allCategory = $categoryRepository->findallCategory();
        //dd($category);
        //dd($lastPosts);
        return $this->render('blog/blog.html.twig', [
            'lastPosts' => $lastPosts,
            'allCategory' => $allCategory 
        ]);
    }

    /**
     * @Route("/article/{id}", name="post")
     */
    public function post(Posts $posts): Response
    {
        //dd($posts);
        return $this->render('blog/post.html.twig', [
            'post' => $posts
        ]);
    }
}

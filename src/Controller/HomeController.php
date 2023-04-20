<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $article): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
    
                // Récupration des 6 dernières notes
                'note' => $article->findBy(
                    [],
                    ['id' => 'DESC'],
                    6
                ),
            ]);
    }
}

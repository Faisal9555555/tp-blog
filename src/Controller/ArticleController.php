<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{id}', name: 'show_article', methods: ['GET'])]

            public function show($id, ArticleRepository $oneArticle): Response
    {
        // Affiche l'article demandée dans le template dédié
        return $this->render('article/single.html.twig', [
            // Récupère l'article demandée par son id
            'oneNote' => $oneArticle->findOneBy(
                ['id' => $id]
            ),
        ]);
    }

    #[Route('/articles', name: 'articles', methods: ['GET'])]
    public function notes( ArticleRepository $article): Response
    {
        return $this->render('article/articles.html.twig', [
            'note' => $article->findAll()
        ]);
    }
}

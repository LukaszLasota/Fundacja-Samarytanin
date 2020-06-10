<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\News;

class KontaktController extends AbstractController
{
    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function index(News $news)
    {
        return $this->render('kontakt/index.html.twig', [
            'controller_name' => 'Kontakt',
            'posts' => $news->getPosts(5, 5)
        ]);
    }
}

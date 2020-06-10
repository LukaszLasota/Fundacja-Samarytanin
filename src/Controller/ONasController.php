<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\News;

class ONasController extends AbstractController
{
    /**
     * @Route("/o-nas", name="o_nas")
     */
    public function index(News $news)
    {
        return $this->render('o_nas/index.html.twig', [
            'controller_name' => 'O Nas',
            'posts' => $news->getPosts(4, 10)
        ]);
    }
}

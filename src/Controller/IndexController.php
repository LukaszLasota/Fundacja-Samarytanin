<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'Samarytanin',
            'menu' => [
                [
                'href' => '#one',
                'name' => 'O NAS',
                ],
                [
                'href' => '#two',
                'name' => 'usługi',
                ],
                [
                'href' => '/statut',
                'name' => 'statut',
                ],
                [
                'href' => '#three',
                'name' => 'kontakt',
                ]
                ]
            ]
        );
    }
}

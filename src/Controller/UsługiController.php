<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UsługiController extends AbstractController
{
    /**
     * @Route("/uslugi", name="us_ugi")
     */
    public function index()
    {
        return $this->render('usługi/index.html.twig', [
            'controller_name' => 'UsługiController',
        ]);
    }
}

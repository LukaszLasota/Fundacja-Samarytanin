<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StatutController extends AbstractController
{
    /**
     * @Route("/statut", name="statut")
     */
    public function index()
    {
        return $this->render('statut/index.html.twig', [
            'controller_name' => 'Statut',
        ]);
    }
}

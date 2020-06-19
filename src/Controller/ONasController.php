<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Menu;

class ONasController extends AbstractController
{
    /**
     * @Route("/o-nas", name="o_nas")
     */
    public function index(Menu $Menu)
    {
        return $this->render('o_nas/index.html.twig', [
            'controller_name' => 'O Nas',
            'Menu' => $Menu->getPosts()
        ]);
    }
}

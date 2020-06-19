<?php

namespace App\Service;

class Menu {
    public function getPosts() 
    {    
        $menu = [
            [
            'href' => '/o-nas',
            'name' => 'O NAS',
            ],
            [
            'href' => '/uslugi',
            'name' => 'usługi',
            ],
            [
            'href' => '/statut',
            'name' => 'statut',
            ],
            [
            'href' => '/kontakt',
            'name' => 'kontakt',
            ],
        ];
    }
}
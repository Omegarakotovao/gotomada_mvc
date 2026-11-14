<?php

declare(strict_types=1);

namespace App\Controller;


use Mithridatem\Routing\Attribute\Route;

//création de la classe CarteController et qui hérite de la classe parente AbstractController
final class CarteController extends AbstractController{
     // Associe l'URL /apropos à la méthode index avec une requête HTTP GET.
 #[Route(path: '/carte', method: 'GET', grants: [])]
    public function index(): void
    {
        $this->render('carte', 'Carte', []);
    }
    
}
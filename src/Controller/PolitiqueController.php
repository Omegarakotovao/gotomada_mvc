<?php

declare(strict_types=1);

namespace App\Controller;


use Mithridatem\Routing\Attribute\Route;

//création de la clCasse AproposController et qui hérite de la classe parente AbstractController
final class PolitiqueController extends AbstractController{
     // Associe l'URL /apropos à la méthode index avec une requête HTTP GET.
 #[Route(path: '/politique', method: 'GET', grants: [])]
    public function index(): void
    {
        $this->render('politique', 'Politique', []);
    }
    
}
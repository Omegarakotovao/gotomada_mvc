<?php

declare(strict_types=1);

namespace App\Controller;


use Mithridatem\Routing\Attribute\Route;

//création de la classe ConditionController et qui hérite de la classe parente AbstractController
final class ConditionController extends AbstractController{
     // Associe l'URL /apropos à la méthode index avec une requête HTTP GET.
 #[Route(path: '/conditions', method: 'GET', grants: [])]
    public function index(): void
    {
        $this->render('conditions', 'Conditions', []);
    }
    
}
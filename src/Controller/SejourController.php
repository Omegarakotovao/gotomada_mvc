<?php

declare(strict_types=1); // Active le typage strict pour éviter les conversions automatiques de types.

namespace App\Controller;

use Mithridatem\Routing\Attribute\Route;

//création de la classe avec son héritage de la classe parente 
final class SejourController extends AbstractController{
     // Associe l'URL /sejours à la méthode index avec une requête HTTP GET.
 #[Route(path: '/sejours', method: 'GET', grants: [])]
    public function index(): void
    {
        $this->render('sejours', 'Nos séjours à Madagascar', [
            //tableau associatif sejours 
    'sejours' =>  [ //tableau indexé qui contient les 3 destinations
        // nos destinations ici
        "Nosy-Be", "Sainte-Marie", "Parc National de l'Isalo"
    ]
]);
    }
    
}
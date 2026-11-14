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
    'sejours' =>  [

        [
            'nom' => 'Île Sainte-Marie',
            'duree' => 10,
            'description' => 'Séjour tout compris : hébergement en écolodge, transport en bateau, restauration locale, safari d’observation des baleines et détente sur les plages paradisiaques.',
            'prix' => 100,
            'image'=>'/images/ile-sainte-marie-2.webp'
        ],

        [
            'nom' => 'Parc national de l’Isalo',
            'duree' => 10,
            'description' => 'Aventure et nature : hôtel grand confort, transport en véhicule tout-terrain avec guide local, pension complète, randonnées dans les canyons et piscines naturelles.',
            'prix' => 200,
            'image'=>'/images/parc-isalo-1.webp'
        ],

        [
            'nom' => 'Nosy Be',
            'duree' => 10,
            'description' => 'Détente et découvertes marines : hôtel en bord de mer, transferts inclus, restauration demi-pension, excursion vers les îles voisines et plongée sous-marine.',
            'prix' => 80,
            'image'=>'/images/nosy-be-2.webp'
        ],

        [
            'nom' => 'Nosy Iranja',
            'duree' => 7,
            'description' => 'Échappée sauvage : lodge sur l’île aux tortues, traversée en vedette rapide, restauration complète aux saveurs marines, baignade sur le banc de sable blanc.',
            'prix' => 150,
            'image'=>'/images/nosy iranja 1.webp'
        ]

    ]
]);
    }
    
}
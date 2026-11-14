<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <header>
        <div class="navLien">
            <nav>
                <!-- Logo principal de GoToMada -->
                <img class="logoGotomada" src="/images/logo-gotomada.webp"
                    alt="Le logo de GoToMada représentant un lémurien">

                <!-- Bouton du menu burger : affiché sur mobile -->
                <button class="menuBurger">☰</button>

                <!-- Navigation principale -->
                <div class="navigation">
                    <ul>
                        <li>
                            <a href="/">Accueil</a>
                        </li>
                        <li>
                            <a class="accueilActif" href="/sejours">Séjours</a>
                        </li>
                        <li>
                            <a href="/carte">Carte interactive</a>
                        </li>
                        <li>
                            <a href="/apropos">À propos</a>
                        </li>
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Actions utilisateur -->
                <div class="actions">
                    <i class="fa fa-search"></i>
                    <a href="/connexion" class="boutonConnexion">Connexion</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Titre principal de la page -->
        <section id="introductionSejours">
            <h1>Nos Séjours à Madagascar</h1>
            <p>Des voyages organisés tout compris : hébergement, transport, restauration et activités pour découvrir Madagascar en toute sérénité.</p>
        </section>

        <!-- Formulaire de recherche et de filtres complet -->
        <section id="filtresSejours">
            <h2>Rechercher un séjour sur mesure</h2>
            <form action="/sejours" method="get">
                <div>
                    <label for="budget">Budget max / pers. :</label>
                    <select id="budget" name="budget">
                        <option value="">Tous les budgets</option>
                        <option value="100">Jusqu'à 100$</option>
                        <option value="150">Jusqu'à 150$</option>
                        <option value="200">Jusqu'à 200$</option>
                        <option value="plus">Plus de 200$</option>
                    </select>
                </div>

                <div>
                    <label for="dateDepart">Date souhaitée :</label>
                    <input type="date" id="dateDepart" name="dateDepart">
                </div>

                <div>
                    <label for="voyageurs">Nombre de personnes :</label>
                    <input type="number" id="voyageurs" name="voyageurs" min="1" max="10" value="2">
                </div>

                <div>
                    <label for="preferences">Préférences de voyage :</label>
                    <select id="preferences" name="preferences">
                        <option value="">Toutes les envies</option>
                        <option value="plage">Détente & Plages paradisiaques</option>
                        <option value="aventure">Aventure & Randonnée</option>
                        <option value="nature">Faune & Nature sauvage</option>
                        <option value="culture">Culture & Authenticité</option>
                    </select>
                </div>

                <div>
                    <label for="duree">Durée :</label>
                    <select id="duree" name="duree">
                        <option value="">Toutes les durées</option>
                        <option value="court">Moins de 7 jours</option>
                        <option value="moyen">7 à 10 jours</option>
                        <option value="long">Plus de 10 jours</option>
                    </select>
                </div>

                <div>
                    <label for="region">Région :</label>
                    <select id="region" name="region">
                        <option value="">Toutes les régions</option>
                        <option value="est">Est & Îles (Sainte-Marie)</option>
                        <option value="nord">Nord & Plages (Nosy Be, Nosy Iranja)</option>
                        <option value="sud">Sud & Parcs (Isalo)</option>
                    </select>
                </div>

                <button type="submit" class="boutonVoirplus">Filtrer les séjours</button>
            </form>
        </section>

        <!-- Catalogue des séjours -->
        <section id="nosSejours">
            <h2>Tous nos séjours disponibles</h2>

            <div class="lesCartes">

    <?php foreach ($data['sejours'] as $sejour): ?>

        <div class="carte">

    
             <div class="imagePrix">
                        <img src="<?= htmlspecialchars($sejour['image'], ENT_QUOTES, 'UTF-8') ?>"
     alt="Photo du séjour <?= htmlspecialchars($sejour['nom'], ENT_QUOTES, 'UTF-8') ?>">
                        <p class="prix">
                           <p class="prix">
    À partir de <?= htmlspecialchars((string) $sejour['prix'], ENT_QUOTES, 'UTF-8') ?> $
</p>
                        </p>
                    </div>
                    <div class="elementsCarte">
                        <div class="titreVoyage">
                            <h3>
    <?= htmlspecialchars($sejour['nom'], ENT_QUOTES, 'UTF-8') ?>
</h3>
                            <p class="voyage">
                                <p class="voyage">
    Voyage de <?= htmlspecialchars((string) $sejour['duree'], ENT_QUOTES, 'UTF-8') ?> jours
</p>
                            </p>
                        </div>
                        <p class="description">
                            <?= htmlspecialchars($sejour['description'], ENT_QUOTES, 'UTF-8') ?>
                        </p>
                        <a class="boutonVoirplus" href="/detail-sejour">Voir le séjour & réserver</a>
                    </div>
                </div>


        </div>

    <?php endforeach; ?>

</div>

</div>
                
        </section>

        <!-- Galerie photos -->
        <section id="galeriePhotos">
            <h2>Galerie photos de nos séjours</h2>
            <div class="galerie">
                <img class="imageGalerie" src="/images/ile-sainte-marie-3.webp"
                    alt="Paysage côtier de Sainte-Marie">
                <img class="imageGalerie" src="/images/salo-parc-3.webp"
                    alt="Vue panoramique du parc national de l'Isalo">
                <img class="imageGalerie" src="/images/nosy-be-33.webp"
                    alt="Bateau traditionnel sur les eaux de Nosy Be">
                <img class="imageGalerie" src="/images/lemurien-noir-blanc.webp"
                    alt="Lémurien noir et blanc dans son habitat naturel">
            </div>
        </section>
    </main>

    <footer>
        <div class="footerContenu">
            <div class="colonneGotomada">
                <h3>GoToMada</h3>
                <p>Partez à la découverte de Madagascar avec GoToMada et vivez des expériences uniques entre plages,
                    nature, culture et paysages exceptionnels.</p>
                <div class="logoApp">
                    <img class="logo" src="/images/logo-linkediln.webp" alt="logo de linkedin">
                    <img class="logo" src="/images/logo-instagram.webp" alt="logo d'instagram">
                    <img class="logo" src="/images/logo-facebook.webp" alt="logo de facebook">
                </div>
            </div>

            <div class="learnMore">
                <h3>En savoir plus</h3>
                <a href="/apropos">À propos</a>
                <a href="/sejours">Nos séjours</a>
                <a href="/carte">Carte interactive</a>
                <a href="/contact">Contact</a>
            </div>

            <div class="support">
                <h3>Informations légales</h3>
                <a href="/mentions-legales">Mentions légales</a>
                <a href="/politique">Politique de confidentialité</a>
                <a href="/conditions">Conditions d'utilisation</a>
            </div>
        </div>
    </footer>

    <script src="/js/script.js"></script>
</body>

</html>
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

                <!-- Bouton du menu burger sur mobile -->
                <button class="menuBurger">☰</button>

                <!-- Navigation principale -->
                <div class="navigation">
                    <ul>
                        <li>
                            <a href="/">Accueil</a>
                        </li>
                        <li>
                            <a href="/sejours">Séjours</a>
                        </li>
                        <li>
                            <a class="accueilActif" href="/carte">Carte interactive</a>
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
        <!-- Titre et introduction -->
        <section id="introductionCarte">
            <h1>Carte interactive des séjours à Madagascar</h1>
            <p>Explorez Madagascar par région et découvrez les séjours tout compris organisés par GoToMada pour préparer votre voyage idéal.</p>
        </section>

        <!-- Zone de la carte -->
        <section id="zoneCarte">
            <h2>Localisation géographique de nos offres</h2>
            <div id="carteInteractive">
                <!-- Image de la carte de Madagascar servant de support visuel accessible -->
                <figure>
                    <img class="imageMadagascar" src="/images/carte-de-Madagascar.webp"
                        alt="Carte géographique de Madagascar indiquant les zones des séjours GoToMada">
                    <figcaption>Carte de Madagascar : découvrez nos séjours au Nord, à l'Est et au Sud de l'île.</figcaption>
                </figure>
            </div>
        </section>

        <!-- Liste des séjours par zone géographique -->
        <section id="sejoursParRegion">
            <h2>Nos séjours par région</h2>

            <div class="lesCartes">
                <!-- Région Est -->
                <article class="carte">
                    <div class="elementsCarte">
                        <div class="titreVoyage">
                            <h3>Région Est — Île Sainte-Marie</h3>
                            <p class="voyage">10 jours</p>
                        </div>
                        <p class="description">
                            Paradis tropical de la côte Est : observation des baleines à bosse, lagons translucides et détente en écolodge les pieds dans l'eau.
                        </p>
                        <a class="boutonVoirplus" href="/detail-sejour">Voir ce séjour & réserver</a>
                    </div>
                </article>

                <!-- Région Sud -->
                <article class="carte">
                    <div class="elementsCarte">
                        <div class="titreVoyage">
                            <h3>Région Sud — Parc de l'Isalo</h3>
                            <p class="voyage">10 jours</p>
                        </div>
                        <p class="description">
                            Aventure et grands espaces : massifs rocheux spectaculaires, canyons sculptés, piscines naturelles et faune endémique au cœur de la nature.
                        </p>
                        <a class="boutonVoirplus" href="/sejours">Voir ce séjour</a>
                    </div>
                </article>

                <!-- Région Nord -->
                <article class="carte">
                    <div class="elementsCarte">
                        <div class="titreVoyage">
                            <h3>Région Nord — Nosy Be & Nosy Iranja</h3>
                            <p class="voyage">7 à 10 jours</p>
                        </div>
                        <p class="description">
                            Archipel aux senteurs d'ylang-ylang : plongée sur les récifs coralliens, plages de sable blanc et rencontre avec les tortues marines.
                        </p>
                        <a class="boutonVoirplus" href="/sejours">Voir ces séjours</a>
                    </div>
                </article>
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

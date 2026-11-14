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

                <!-- Bouton du menu burger : sera affiché uniquement sur les petits écrans -->
                <button class="menuBurger">☰</button>

                <!-- Conteneur qui regroupe les liens de navigation -->
                <div class="navigation">
                    <!-- Liste des liens du menu de navigation -->
                    <ul>
                        <li>
                            <a href="/">Accueil</a>
                        </li>

                        <li>
                            <a href="/sejours">Séjours</a>
                        </li>

                        <li>
                            <a href="/carte">Carte interactive</a>
                        </li>

                        <li>
                            <a class="accueilActif" href="/apropos">À propos</a>
                        </li>

                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Conteneur des actions de l'utilisateur -->
                <div class="actions">
                    <i class="fa fa-search"></i>

                    <!-- Lien vers la page de connexion -->
                    <a href="/connexion" class="boutonConnexion">Connexion</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- section a propos -->
        <section id="aPropos">
            <h1 class="titreApropos">À propos de GoToMada</h1>

            <div class="conteneurApropos">
                <img src="/images/image-section-a-propos.webp"
                    alt="Touriste échangeant chaleureusement avec des habitants locaux à Madagascar">

                <p class="paragrapheapresTitre">
                    GoToMada est une agence de voyage dédiée à la découverte de Madagascar.
                    Notre objectif est de vous faire découvrir l'île autrement, à travers des séjours organisés qui
                    associent nature, culture, détente et aventure.

                    Nous vous accompagnons dans la préparation de votre voyage en proposant des séjours adaptés à vos
                    envies, avec des hébergements, des transports, des activités et des expériences soigneusement
                    sélectionnés.

                    Notre ambition : vous permettre de découvrir Madagascar sereinement et de vivre des moments
                    authentiques et inoubliables.
                </p>
            </div>
        </section>

        <!-- section de présentation de Madagascar -->
        <section id="madagascar">
            <div class="carteMadagascar">
                <img class="imageMadagascar" src="/images/carte-de-Madagascar.webp"
                    alt="image de la carte de Madagascar">
            </div>

            <!-- div parents -->
            <div class="contenu">
                <div class="presentationMadagascar">
                    <h2 class="pourquoiMada">Pourquoi visiter Madagascar?</h2>

                    <p class="visiterMadagascar">
                        Madagascar est une île unique située dans l'océan Indien, reconnue pour sa biodiversité
                        exceptionnelle, ses plages paradisiaques et ses paysages uniques.
                    </p>
                </div>

                <div class="statistiques">
                    <div class="statistique">
                        <p class="pourcentage">90% d'espèces endémiques</p>
                    </div>

                    <div class="statistique">
                        <p>Plus de 5 000 km de côtes</p>
                    </div>

                    <div class="statistique">
                        <p>Plus de 50 parcs et réserves naturelles</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footerContenu">
            <div class="colonneGotomada">
                <h3>GoToMada</h3>

                <!-- description de l'agence GoToMada-->
                <p>
                    Partez à la découverte de Madagascar avec GoToMada et vivez des expériences uniques entre plages,
                    nature, culture et paysages exceptionnels.
                </p>

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

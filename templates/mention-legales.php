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
        <section id="introductionLegale">
            <h1>Mentions légales</h1>
            <p>Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique (LCEN), voici les informations légales relatives au site GoToMada.</p>
        </section>

        <!-- Contenu des mentions légales -->
        <section id="contenuMentions">
            <!-- 1. Éditeur du site -->
            <article>
                <h2>1. Éditeur de la plateforme</h2>
                <p><strong>Dénomination :</strong> GoToMada Voyages</p>
                <p><strong>Directeur de la publication :</strong> RAKOTOVAO Oméga</p>
                <p><strong>Statut :</strong> Projet web réalisé dans le cadre de la formation Développeur Web et Web Mobile (DWWM - ADRAR Formation)</p>
                <p><strong>Courriel de contact :</strong> contact@gotomada.com</p>
                <p><strong>Téléphone :</strong> +33 (0)5 00 00 00 00</p>
            </article>

            <!-- 2. Hébergeur du site -->
            <article>
                <h2>2. Hébergement</h2>
                <p>Le site GoToMada est hébergé par :</p>
                <p><strong>Hébergeur :</strong> OVHcloud SAS</p>
                <p><strong>Adresse :</strong> 2 rue Kellermann - 59100 Roubaix - France</p>
                <p><strong>Site internet :</strong> https://www.ovhcloud.com</p>
            </article>

            <!-- 3. Propriété intellectuelle -->
            <article>
                <h2>3. Propriété intellectuelle</h2>
                <p>
                    L'ensemble des éléments constituant le site GoToMada (textes, graphismes, logiciels, photographies, logos, marques) est protégé par les lois relatives à la propriété intellectuelle.
                </p>
                <p>
                    Toute reproduction, représentation, modification ou diffusion, totale ou partielle, du contenu de ce site sans l'autorisation préalable et écrite de l'éditeur est strictement interdite et constituerait une contrefaçon sanctionnée par le Code de la propriété intellectuelle.
                </p>
            </article>

            <!-- 4. Données personnelles -->
            <article>
                <h2>4. Données personnelles & Cookies</h2>
                <p>
                    GoToMada accorde une importance capitale à la confidentialité et à la sécurité des données de ses utilisateurs.
                    Pour en savoir plus sur la collecte et le traitement de vos informations personnelles, vous pouvez consulter notre <a href="politique.html">politique de confidentialité</a>.
                </p>
            </article>
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

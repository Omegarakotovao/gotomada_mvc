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
        <!-- Titre et introduction -->
        <section id="introductionPolitique">
            <h1>Politique de confidentialité</h1>
            <p>GoToMada s'engage à protéger la vie privée des utilisateurs de sa plateforme conformément au Règlement Général sur la Protection des Données (RGPD) et à la loi Informatique et Libertés.</p>
        </section>

        <!-- Articles détaillant la politique de confidentialité -->
        <section id="contenuPolitique">
            <!-- 1. Responsable du traitement -->
            <article>
                <h2>1. Responsable du traitement des données</h2>
                <p>
                    Les données à caractère personnel collectées sur ce site sont traitées par l'agence <strong>GoToMada Voyages</strong>, représentée par RAKOTOVAO Oméga.
                </p>
                <p>Courriel de contact pour la protection des données : <strong>dpo@gotomada.com</strong></p>
            </article>

            <!-- 2. Données collectées -->
            <article>
                <h2>2. Données personnelles collectées</h2>
                <p>Dans le cadre de l'utilisation de nos services, nous sommes amenés à collecter les catégories de données suivantes :</p>
                <ul>
                    <li><strong>Création de compte :</strong> nom, prénom, adresse email, mot de passe sécurisé.</li>
                    <li><strong>Réservation de séjours :</strong> dates de voyage, nombre de participants, formule d'hébergement choisie, demandes particulières.</li>
                    <li><strong>Espace profil :</strong> numéro de téléphone, adresse postale, code postal, ville, pays.</li>
                    <li><strong>Formulaire de contact :</strong> nom, email, objet et contenu de votre message.</li>
                </ul>
            </article>

            <!-- 3. Finalités de la collecte -->
            <article>
                <h2>3. Finalités et bases légales du traitement</h2>
                <p>Vos données sont collectées pour des objectifs précis et légitimes :</p>
                <ul>
                    <li>Gestion et suivi de vos réservations de séjours (exécution du contrat).</li>
                    <li>Accès et gestion de votre compte dans l'Espace Utilisateur.</li>
                    <li>Réponse à vos demandes via notre formulaire de contact.</li>
                    <li>Respect de nos obligations légales, réglementaires et comptables.</li>
                </ul>
            </article>

            <!-- 4. Durée de conservation -->
            <article>
                <h2>4. Durée de conservation des données</h2>
                <p>
                    Les données relatives à votre compte utilisateur sont conservées pendant toute la durée de votre inscription.
                    Les données liées aux réservations de séjours et à la facturation sont conservées pendant une durée légale de 5 à 10 ans conformément aux obligations comptables et fiscales.
                </p>
            </article>

            <!-- 5. Vos droits (RGPD) -->
            <article>
                <h2>5. Vos droits concernant vos données</h2>
                <p>Conformément au RGPD, vous disposez des droits suivants sur vos données personnelles :</p>
                <ul>
                    <li><strong>Droit d'accès :</strong> vous pouvez obtenir une copie de vos données enregistrées.</li>
                    <li><strong>Droit de rectification :</strong> vous pouvez modifier vos coordonnées directement dans votre <a href="espace-utilisateur/profil.html">espace profil</a>.</li>
                    <li><strong>Droit à l'effacement (« droit à l'oubli ») :</strong> vous pouvez demander la suppression de votre compte.</li>
                    <li><strong>Droit d'opposition et de limitation :</strong> vous pouvez vous opposer à certains traitements non essentiels.</li>
                </ul>
                <p>Pour exercer ces droits, vous pouvez nous écrire à tout moment à l'adresse <strong>dpo@gotomada.com</strong> ou via notre <a href="contact.html">page de contact</a>.</p>
            </article>

            <!-- 6. Cookies -->
            <article>
                <h2>6. Utilisation des cookies</h2>
                <p>
                    Le site GoToMada utilise uniquement des cookies strictement nécessaires au fonctionnement technique de la plateforme (gestion de la session de connexion et maintien des préférences de navigation).
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


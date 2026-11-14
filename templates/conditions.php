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
        <section id="introductionConditions">
            <h1>Conditions générales d'utilisation & de réservation</h1>
            <p>Les présentes conditions définissent les droits et obligations des parties dans le cadre de la réservation de séjours touristiques organisés sur la plateforme GoToMada.</p>
        </section>

        <!-- Articles des conditions -->
        <section id="contenuConditions">
            <!-- 1. Objet -->
            <article>
                <h2>1. Objet des prestations</h2>
                <p>
                    GoToMada propose des séjours touristiques organisés clés en main à Madagascar. Chaque séjour constitue une offre globale combinant des lieux visités, l'hébergement, la restauration, les transferts locaux et des activités encadrées.
                </p>
            </article>

            <!-- 2. Modalités de réservation -->
            <article>
                <h2>2. Réservation d'un séjour</h2>
                <p>
                    La réservation s'effectue directement depuis la fiche détaillée du séjour sélectionné (<a href="/sejours">consulter nos séjours</a>). Le client choisit sa date de départ, le nombre de voyageurs et la formule d'hébergement.
                </p>
                <p>
                    Toute réservation validée est automatiquement enregistrée et consultable par l'utilisateur dans son <a href="/espace-utilisateur/reservations">espace personnel (« Mes réservations »)</a>.
                </p>
            </article>

            <!-- 3. Tarifs et paiement -->
            <article>
                <h2>3. Tarifs et conditions de règlement</h2>
                <p>
                    Les prix des séjours sont indiqués en dollars américains ($ USD) par personne sur la base d'une occupation double. Ils incluent l'ensemble des prestations mentionnées dans le descriptif du séjour.
                </p>
                <p>
                    Le règlement s'effectue selon les modalités convenues lors de la confirmation du séjour (acompte à la réservation et solde avant le départ).
                </p>
            </article>

            <!-- 4. Prestations incluses et exclues -->
            <article>
                <h2>4. Prestations incluses et non incluses</h2>
                <p><strong>Sont inclus dans nos séjours :</strong></p>
                <ul>
                    <li>L'hébergement en écolodge ou hôtel selon la formule retenue.</li>
                    <li>Les repas précisés au programme (pension complète ou demi-pension).</li>
                    <li>Les transports intérieurs et transferts terrestres et maritimes.</li>
                    <li>Les activités prévues avec guides locaux certifiés.</li>
                </ul>
                <p><strong>Ne sont pas inclus :</strong></p>
                <ul>
                    <li>Les vols internationaux à destination de Madagascar.</li>
                    <li>Les frais de visa d'entrée sur le territoire malgache.</li>
                    <li>Les dépenses personnelles, pourboires et assurances optionnelles.</li>
                </ul>
            </article>

            <!-- 5. Modification et annulation -->
            <article>
                <h2>5. Conditions d'annulation et de modification</h2>
                <p>
                    Toute demande d'annulation ou de modification doit être notifiée par écrit via notre <a href="/contact">formulaire de contact</a>.
                </p>
                <ul>
                    <li><strong>Plus de 30 jours avant le départ :</strong> remboursement intégral déduction faite des frais de dossier.</li>
                    <li><strong>Entre 30 et 15 jours avant le départ :</strong> retenue de 50 % du montant du séjour.</li>
                    <li><strong>Moins de 15 jours avant le départ :</strong> retenue de 100 % du montant du séjour.</li>
                </ul>
            </article>

            <!-- 6. Formalités et assurances -->
            <article>
                <h2>6. Formalités d'entrée et assurances</h2>
                <p>
                    Il appartient au voyageur de s'assurer qu'il dispose d'un passeport en cours de validité (au moins 6 mois après la date de retour prévue) et des visas nécessaires. Une assurance assistance-rapatriement est vivement recommandée pour tout séjour à Madagascar.
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

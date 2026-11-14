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
                <img class="logoGotomada" src="../images/logo-gotomada.webp"
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
        <!-- Lien de retour / fil d'ariane -->
        <nav aria-label="Fil d'Ariane">
            <p><a href="/sejours">← Retour à tous les séjours</a></p>
        </nav>

        <!-- Présentation générale du séjour -->
        <section id="presentationSejour">
            <h1>Séjour Île Sainte-Marie : Plages & Safari Baleines</h1>
            <p><strong>Voyage organisé clé en main de 10 jours</strong> — À partir de 100$ par personne</p>

            <figure>
                <img src="../images/ile-sainte-marie-2.webp"
                    alt="Baleine à bosse sautant hors de l'eau près de l'île Sainte-Marie">
                <figcaption>Une expérience inoubliable au plus près de la faune marine malgache.</figcaption>
            </figure>
        </section>

        <!-- Détail des 5 prestations incluses -->
        <section id="detailsPrestations">
            <h2>Les prestations incluses dans ce séjour</h2>

            <article>
                <h3>1. Lieux visités & Programme</h3>
                <p>
                    Au cours de ce séjour de 10 jours, vous explorerez le littoral sauvage de l'île Sainte-Marie :
                    visite guidée de l'Île aux Nattes, découverte du cimetière des pirates dans la baie des Forbans,
                    et détente sur les plages préservées du nord de l'île.
                </p>
            </article>

            <article>
                <h3>2. Hébergement</h3>
                <p>
                    9 nuits en écolodge traditionnel de charme, les pieds dans l'eau.
                    Bungalows spacieux construits avec des matériaux locaux, dotés de terrasse privative avec vue sur l'océan Indien.
                </p>
            </article>

            <article>
                <h3>3. Restauration</h3>
                <p>
                    Formule tout compris (petit-déjeuner, déjeuner et dîner).
                    Savourez une cuisine locale authentique à base de poissons et fruits de mer frais du jour, riz parfumé, fruits tropicaux et touches subtiles de vanille de Madagascar.
                </p>
            </article>

            <article>
                <h3>4. Transport</h3>
                <p>
                    Prise en charge intégrale dès votre arrivée : transferts en véhicule privé depuis l'aéroport jusqu'au port, traversée maritime sécurisée en vedette rapide, et mise à disposition de vélos pour vos déplacements sur l'île.
                </p>
            </article>

            <article>
                <h3>5. Activités incluses</h3>
                <p>
                    Deux sorties en mer avec des écoguides locaux pour l'observation des baleines à bosse, session de snorkeling sur la barrière de corail avec équipement fourni, et randonnée pédestre à la découverte de la forêt côtière.
                </p>
            </article>
        </section>

        <!-- Formulaire de réservation -->
        <section id="reservationSejour">
            <h2>Réserver ce séjour</h2>
            <p>Remplissez ce formulaire pour planifier votre départ. Vous retrouverez ensuite votre réservation dans votre espace client.</p>

            <form action="espace-utilisateur/reservations.html" method="post">
                <!-- Champ masqué pour mémoriser l'identifiant du séjour -->
                <input type="hidden" name="sejourId" value="sainte-marie-10j">

                <div>
                    <label for="dateDepart">Date de départ souhaitée :</label>
                    <input type="date" id="dateDepart" name="dateDepart" required>
                </div>

                <div>
                    <label for="nombrePersonnes">Nombre de personnes :</label>
                    <input type="number" id="nombrePersonnes" name="nombrePersonnes" min="1" max="10" value="2" required>
                </div>

                <div>
                    <label for="typeHebergement">Formule d'hébergement :</label>
                    <select id="typeHebergement" name="typeHebergement">
                        <option value="standard">Bungalow Standard (vue jardin)</option>
                        <option value="vue-mer" selected>Bungalow Confort (vue lagon)</option>
                        <option value="suite">Suite Écolodge (front de mer)</option>
                    </select>
                </div>

                <div>
                    <label for="remarques">Remarques ou demandes spécifiques :</label>
                    <textarea id="remarques" name="remarques" rows="4" placeholder="Précisez ici vos régimes alimentaires particuliers, transferts spécifiques ou questions..."></textarea>
                </div>

                <button type="submit" class="boutonVoirplus">Confirmer la réservation</button>
            </form>
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

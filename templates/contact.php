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
                            <a href="/index">Accueil</a>
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
                            <a class="accueilActif" href="/contact">Contact</a>
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
        <section id="introductionContact">
            <h1>Contactez l'équipe GoToMada</h1>
            <p>Une question sur un séjour ? Un projet de voyage à Madagascar ? Remplissez ce formulaire ou utilisez nos coordonnées directes, nos conseillers vous répondent sous 24h.</p>
        </section>

        <!-- Section formulaire de contact -->
        <section id="formulaireContact">
            <h2>Envoyez-nous un message</h2>

            <form action="/contact" method="post">
                <div>
                    <label for="nomComplet">Nom et prénom :</label>
                    <input type="text" id="nomComplet" name="nomComplet" placeholder="Ex. Lucas Bernard" required autocomplete="name">
                </div>

                <div>
                    <label for="email">Adresse email :</label>
                    <input type="email" id="email" name="email" placeholder="votre.email@exemple.com" required autocomplete="email">
                </div>

                <div>
                    <label for="telephone">Numéro de téléphone :</label>
                    <input type="tel" id="telephone" name="telephone" placeholder="+33 6 00 00 00 00" autocomplete="tel">
                </div>

                <div>
                    <label for="sujet">Objet de votre demande :</label>
                    <select id="sujet" name="sujet" required>
                        <option value="">-- Choisissez un sujet --</option>
                        <option value="sejour-sainte-marie">Renseignement sur le séjour Île Sainte-Marie</option>
                        <option value="sejour-isalo">Renseignement sur le séjour Parc de l'Isalo</option>
                        <option value="sejour-nosy-be">Renseignement sur le séjour Nosy Be</option>
                        <option value="suivi-reservation">Suivi de ma réservation en cours</option>
                        <option value="sur-mesure">Demande de séjour sur mesure</option>
                        <option value="autre">Autre demande</option>
                    </select>
                </div>

                <div>
                    <label for="message">Votre message :</label>
                    <textarea id="message" name="message" rows="6" placeholder="Précisez ici vos attentes, vos dates souhaitées ou vos questions..." required></textarea>
                </div>

                <div>
                    <input type="checkbox" id="rgpdContact" name="rgpdContact" required>
                    <label for="rgpdContact">
                        J'accepte que les informations saisies soient utilisées pour répondre à ma demande conformément à la <a href="politique.html">politique de confidentialité</a>.
                    </label>
                </div>

                <button type="submit" class="boutonVoirplus">Envoyer mon message</button>
            </form>
        </section>

        <!-- Section coordonnées de l'agence -->
        <section id="coordonneesAgence">
            <h2>Nos coordonnées</h2>

            <address>
                <article>
                    <h3>Siège à Madagascar</h3>
                    <p>GoToMada Voyages Madagascar</p>
                    <p>Avenue de l'Indépendance, Analakely</p>
                    <p>101 Antananarivo — Madagascar</p>
                </article>

                <article>
                    <h3>Bureau de contact Europe</h3>
                    <p>GoToMada France</p>
                    <p>Courriel : <a href="mailto:contact@gotomada.com">contact@gotomada.com</a></p>
                    <p>Téléphone / WhatsApp : <a href="tel:+33500000000">+33 (0)5 00 00 00 00</a></p>
                </article>

                <article>
                    <h3>Horaires d'accueil téléphonique</h3>
                    <p>Du lundi au vendredi : 8h00 - 18h00 (heure française)</p>
                    <p>Le samedi : 9h00 - 13h00</p>
                </article>
            </address>
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
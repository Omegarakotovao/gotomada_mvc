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
        <!-- Section du formulaire d'inscription -->
        <section id="formulaireInscription">
            <h1>Créer votre compte GoToMada</h1>
            <p>Inscrivez-vous pour réserver vos séjours tout compris à Madagascar et suivre vos réservations en temps réel.</p>

            <form action="/connexion" method="post">
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" required autocomplete="family-name">
                </div>

                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required autocomplete="given-name">
                </div>

                <div>
                    <label for="email">Adresse email :</label>
                    <input type="email" id="email" name="email" placeholder="exemple@email.com" required autocomplete="email">
                </div>

                <div>
                    <label for="motDePasse">Mot de passe :</label>
                    <input type="password" id="motDePasse" name="motDePasse" placeholder="8 caractères minimum" minlength="8" required autocomplete="new-password">
                </div>

                <div>
                    <label for="confirmerMotDePasse">Confirmer le mot de passe :</label>
                    <input type="password" id="confirmerMotDePasse" name="confirmerMotDePasse" placeholder="Répétez votre mot de passe" minlength="8" required autocomplete="new-password">
                </div>

                <div>
                    <input type="checkbox" id="conditions" name="conditions" required>
                    <label for="conditions">
                        J'accepte les <a href="/conditions">conditions d'utilisation</a> et la <a href="/politique">politique de confidentialité</a> de GoToMada.
                    </label>
                </div>

                <button type="submit" class="boutonVoirplus">Créer mon compte</button>
            </form>

            <!-- Redirection pour les utilisateurs déjà inscrits -->
            <div class="liensAideCompte">
                <p>Vous possédez déjà un compte ? <a href="/connexion">Connectez-vous ici</a></p>
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
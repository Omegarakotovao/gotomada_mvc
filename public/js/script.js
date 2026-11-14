/* ==========================================================================
   PROJET GOTOMADA — SCRIPT JAVASCRIPT PRINCIPAL (js/script.js)
   Rôle : Interactions dynamiques du site GoToMada
   Formation : Développeur Web et Web Mobile (DWWM)
   Auteur : RAKOTOVAO Oméga
   
   SOMMAIRE :
   1. Menu de navigation responsive (Burger) — Toutes les pages
   2. Filtrage des séjours par budget et critères — pages/sejours.html
   3. Calcul dynamique du prix et réservation — pages/detail-sejour.html
   ========================================================================== */

/* --------------------------------------------------------------------------
   1. MENU RESPONSIVE (BURGER)
   --------------------------------------------------------------------------
   Pourquoi :
   Permet d'ouvrir et de fermer la liste des liens de navigation sur les écrans
   mobiles et tablettes lors d'un clic sur l'icône ☰.
   
   Notions clés DWWM :
   - document.querySelector() : Cible un élément unique dans le DOM.
   - addEventListener("click", callback) : Déclenche une fonction lors du clic.
   - classList.toggle("menuOuvert") : Ajoute ou retire la classe CSS.
   - classList.remove("menuOuvert") : Retire la classe pour refermer le menu.
   -------------------------------------------------------------------------- */

// Sélection du bouton burger et de la liste de navigation dans le header
const boutonMenu = document.querySelector(".menuBurger");
const listeMenu = document.querySelector(".navigation ul");

// On vérifie que les deux éléments existent bien sur la page avant d'agir
if (boutonMenu && listeMenu) {

    // Écoute de l'événement "click" sur le bouton burger
    boutonMenu.addEventListener("click", () => {
        // Alterne la classe CSS "menuOuvert" pour afficher ou masquer le menu
        listeMenu.classList.toggle("menuOuvert");
    });

    // Amélioration ergonomique : referme le menu quand l'utilisateur clique sur un lien
    const liensMenu = listeMenu.querySelectorAll("a");
    for (let i = 0; i < liensMenu.length; i = i + 1) {
        liensMenu[i].addEventListener("click", () => {
            listeMenu.classList.remove("menuOuvert");
        });
    }
}


/* --------------------------------------------------------------------------
   2. RECHERCHE ET FILTRAGE DES SÉJOURS (pages/sejours.html)
   --------------------------------------------------------------------------
   Pourquoi :
   Permet aux visiteurs de trouver facilement un séjour selon leur budget
   et leur région préférée sans recharger la page.
   
   Notions clés DWWM :
   - event.preventDefault() : Empêche l'envoi du formulaire et le rechargement.
   - Tableau d'objets : Structure organisée regroupant les caractéristiques
     de chaque séjour (titre, prix, région, référence DOM de la carte).
   - Boucle for classique : Parcourt le tableau pour tester chaque séjour.
   - Conditions if / else : Vérifie si le prix est inférieur ou égal au budget.
   - style.display : Affiche ("flex") ou masque ("none") la carte HTML.
   - document.createElement() : Crée dynamiquement un paragraphe de résultats.
   -------------------------------------------------------------------------- */

// On sélectionne le formulaire de recherche présent sur la page des séjours
const formulaireFiltresSejours = document.querySelector("#filtresSejours form");

// Ce bloc ne s'exécute que si nous sommes sur la page "sejours.html"
if (formulaireFiltresSejours) {

    // A. Sélection de toutes les cartes de séjours affichées dans la page
    const cartesSejours = document.querySelectorAll("#nosSejours .carte");

    // B. Création du tableau de données de nos séjours
    // Chaque objet représente un séjour et pointe vers son élément HTML (carte)
    const listeSejours = [
        {
            titre: "Île Sainte-Marie",
            prix: 100,
            region: "est",
            carteHtml: cartesSejours[0]
        },
        {
            titre: "Parc national de l'Isalo",
            prix: 200,
            region: "sud",
            carteHtml: cartesSejours[1]
        },
        {
            titre: "Nosy Be",
            prix: 80,
            region: "nord",
            carteHtml: cartesSejours[2]
        },
        {
            titre: "Nosy Iranja",
            prix: 150,
            region: "nord",
            carteHtml: cartesSejours[3]
        }
    ];

    // C. Création d'un paragraphe pour afficher le nombre de séjours trouvés
    const messageResultat = document.createElement("p");
    messageResultat.id = "messageFiltresResultat";
    messageResultat.style.textAlign = "center";
    messageResultat.style.fontWeight = "600";
    messageResultat.style.margin = "18px 0";
    messageResultat.style.fontSize = "1rem";

    // On insère ce paragraphe juste avant la liste des cartes
    const conteneurCartes = document.querySelector("#nosSejours .lesCartes");
    if (conteneurCartes && conteneurCartes.parentNode) {
        conteneurCartes.parentNode.insertBefore(messageResultat, conteneurCartes);
    }

    // D. Fonction principale de filtrage
    function filtrerSejours(event) {
        // Empêche le rechargement de la page si l'événement provient du submit
        if (event) {
            event.preventDefault();
        }

        // Récupération des valeurs saisies par l'utilisateur
        const selectBudget = document.querySelector("#budget");
        const selectRegion = document.querySelector("#region");

        const budgetChoisi = selectBudget ? selectBudget.value : "";
        const regionChoisie = selectRegion ? selectRegion.value : "";

        // Compteur de résultats initialisé à zéro
        let nombreResultats = 0;

        // Boucle for pour examiner chaque séjour un par un
        for (let i = 0; i < listeSejours.length; i = i + 1) {
            const sejour = listeSejours[i];

            // Variables booléennes indiquant si le séjour remplit les critères
            let correspondBudget = true;
            let correspondRegion = true;

            // 1. Vérification du budget maximum sélectionné
            if (budgetChoisi !== "") {
                if (budgetChoisi === "plus") {
                    // Si l'utilisateur choisit "Plus de 200$"
                    correspondBudget = (sejour.prix > 200);
                } else {
                    // On convertit le texte de l'option (ex: "100") en nombre
                    const budgetMax = Number(budgetChoisi);
                    correspondBudget = (sejour.prix <= budgetMax);
                }
            }

            // 2. Vérification de la région sélectionnée
            if (regionChoisie !== "") {
                correspondRegion = (sejour.region === regionChoisie);
            }

            // 3. Application de l'affichage dans le DOM
            if (correspondBudget && correspondRegion) {
                // Le séjour correspond : on l'affiche
                if (sejour.carteHtml) {
                    sejour.carteHtml.style.display = "flex";
                }
                nombreResultats = nombreResultats + 1;
            } else {
                // Le séjour ne correspond pas : on le masque
                if (sejour.carteHtml) {
                    sejour.carteHtml.style.display = "none";
                }
            }
        }

        // E. Mise à jour dynamique du message pour l'utilisateur
        if (nombreResultats === 0) {
            messageResultat.textContent = "Aucun séjour ne correspond à vos critères de recherche.";
            messageResultat.style.color = "#d9534f"; // Rouge
        } else if (nombreResultats === 1) {
            messageResultat.textContent = "1 séjour correspond à votre recherche.";
            messageResultat.style.color = "#34C759"; // Vert GoToMada
        } else {
            messageResultat.textContent = nombreResultats + " séjours correspondent à votre recherche.";
            messageResultat.style.color = "#34C759";
        }
    }

    // Écoute de l'événement "submit" sur le formulaire (bouton "Filtrer les séjours")
    formulaireFiltresSejours.addEventListener("submit", filtrerSejours);

    // Écoute en direct lors du changement d'une option pour un résultat immédiat
    const selectBudget = document.querySelector("#budget");
    const selectRegion = document.querySelector("#region");
    if (selectBudget) {
        selectBudget.addEventListener("change", filtrerSejours);
    }
    if (selectRegion) {
        selectRegion.addEventListener("change", filtrerSejours);
    }
}


/* --------------------------------------------------------------------------
   3. PAGE DÉTAIL DU SÉJOUR (pages/detail-sejour.html)
   --------------------------------------------------------------------------
   Pourquoi :
   - Calcule automatiquement le prix total en temps réel selon le nombre
     de voyageurs et le type d'hébergement choisi.
   - Empêche de réserver une date passée dans le calendrier.
   - Offre une confirmation visuelle agréable avant redirection.
   
   Notions clés DWWM :
   - new Date().toISOString() : Récupère la date actuelle pour borner le calendrier.
   - Événements "input" et "change" : Détectent la modification en temps réel.
   - Opérations mathématiques simples : (base + option) * personnes.
   - setTimeout() : Déclenche une action après un court délai (ici 2 secondes).
   -------------------------------------------------------------------------- */

const sectionReservation = document.querySelector("#reservationSejour");

// Ce bloc ne s'exécute que sur la page "detail-sejour.html"
if (sectionReservation) {

    // Sélection des champs du formulaire
    const champNombrePersonnes = document.querySelector("#nombrePersonnes");
    const champTypeHebergement = document.querySelector("#typeHebergement");
    const champDateDepart = document.querySelector("#dateDepart");
    const formulaireReservation = sectionReservation.querySelector("form");
    const boutonReserver = sectionReservation.querySelector("button[type='submit']");

    // Prix d'appel par personne pour l'Île Sainte-Marie (100$)
    const prixBaseParPersonne = 100;

    // A. Empêcher la sélection d'une date passée
    if (champDateDepart) {
        // Date d'aujourd'hui au format "YYYY-MM-DD"
        const aujourdhui = new Date().toISOString().split("T")[0];
        champDateDepart.min = aujourdhui;
    }

    // B. Création de l'encadré d'estimation du prix total
    const affichagePrixTotal = document.createElement("div");
    affichagePrixTotal.id = "estimationPrixTotal";
    affichagePrixTotal.style.backgroundColor = "#FFF1D2"; // Beige chaleureux
    affichagePrixTotal.style.border = "1px solid #e6e3da";
    affichagePrixTotal.style.borderRadius = "6px";
    affichagePrixTotal.style.padding = "12px 16px";
    affichagePrixTotal.style.margin = "16px 0";
    affichagePrixTotal.style.fontWeight = "600";
    affichagePrixTotal.style.color = "#1E1D1A";
    affichagePrixTotal.style.textAlign = "center";

    // On insère cet encadré juste au-dessus du bouton de réservation
    if (boutonReserver && boutonReserver.parentNode) {
        boutonReserver.parentNode.insertBefore(affichagePrixTotal, boutonReserver);
    }

    // C. Fonction de calcul du prix total
    function calculerPrixTotal() {
        // Récupération du nombre de voyageurs saisi
        let nombreVoyageurs = Number(champNombrePersonnes.value);
        if (nombreVoyageurs < 1) {
            nombreVoyageurs = 1;
        }

        // Calcul du supplément selon l'hébergement choisi
        let supplementHebergement = 0;
        const formule = champTypeHebergement ? champTypeHebergement.value : "standard";

        if (formule === "vue-mer") {
            supplementHebergement = 20; // +20$ par personne pour Bungalow Confort
        } else if (formule === "suite") {
            supplementHebergement = 50; // +50$ par personne pour Suite Écolodge
        }

        // Calcul mathématique : (100$ + supplément) × nombre de voyageurs
        const prixParPersonne = prixBaseParPersonne + supplementHebergement;
        const totalFinal = prixParPersonne * nombreVoyageurs;

        // Affichage du résultat dans l'encadré
        affichagePrixTotal.textContent = "Total estimé : " + totalFinal + " $ (" + nombreVoyageurs + " personne(s) × " + prixParPersonne + " $)";
    }

    // Calcul immédiat lors du chargement de la page
    calculerPrixTotal();

    // Recalcul en direct dès que l'utilisateur modifie un champ
    if (champNombrePersonnes) {
        champNombrePersonnes.addEventListener("input", calculerPrixTotal);
    }
    if (champTypeHebergement) {
        champTypeHebergement.addEventListener("change", calculerPrixTotal);
    }

    // D. Confirmation visuelle lors de l'envoi de la réservation
    if (formulaireReservation) {
        formulaireReservation.addEventListener("submit", (event) => {
            // Bloque le rechargement immédiat pour permettre l'affichage du message
            event.preventDefault();

            // Vérifie que la date a bien été choisie
            if (champDateDepart && champDateDepart.value === "") {
                alert("Veuillez sélectionner une date de départ.");
                return;
            }

            // Message de succès avec couleur verte
            affichagePrixTotal.style.backgroundColor = "rgba(52, 199, 89, 0.15)";
            affichagePrixTotal.style.color = "#2db34f";
            affichagePrixTotal.textContent = "✓ Réservation enregistrée avec succès ! Redirection vers vos réservations...";

            // Redirection après 2 secondes vers la page des réservations
            setTimeout(() => {
                window.location.href = "espace-utilisateur/reservations.html";
            }, 2000);
        });
    }
}
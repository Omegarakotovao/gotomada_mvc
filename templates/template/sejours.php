<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
</head>

<body>
    <h1><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h1>
    <!-- affiche le titre transmis par le controller -->
       

    <ul>
        <?php
        foreach ($data['sejours'] as $sejour) {
            // la boucle foreach qui afficher les sejours en liste 
            echo "<li>" . htmlspecialchars($sejour, ENT_QUOTES, 'UTF-8') . "</li>";
        }
        ?>
    </ul>
</body>

</html>
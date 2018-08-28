<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Exercice 4 Partie 8</h1>
        <!-- Ouverture des balises PHP dans une balise <p> -->
        <p>
            <?php
            // Vérification que le cookie existe.
            if (!empty($_COOKIE['login'])) {
                // Affichage du cookie.
                echo 'votre login est : ' .  $_COOKIE['login'];
            } else {
                ?><p>Login invalide</p><?php
            }
            // Vérification que le cookie existe.
            if (!empty($_COOKIE['password'])) {
                // Affichage du cookie.
               echo ', et votre mot de passe est : ' .  $_COOKIE['password'];
            } else {
               ?><p>Mot de passe invalide</p><?php 
            }
            ?>
        </p>
    </body>
</html>
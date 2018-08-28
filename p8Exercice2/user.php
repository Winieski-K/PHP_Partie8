<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>User page Exercice 2</title>
    </head>
    <body>
        <!-- Vérifie que les variables existent et ont une valeur -->
        <?php  if (!empty($_SESSION['lastname']) && !empty($_SESSION['firstname']) && !empty($_SESSION['age'])) { ?>
        <p>
            <?php 
                // Affiche la valeur de la variable lastname
                echo 'Your lastname is : ' . $_SESSION['lastname'];
                ?>
                <br />
                <?php 
                // Affiche la valeur de la variable firstname
                echo 'Your firstname is : ' . $_SESSION['firstname']; ?>
                <br />
                <?php
                // Affiche la valeur de la variable age
                echo 'Your age is : ' . $_SESSION['age'];
            } else {
                echo 'Missing data';
            }
            ?>
        </p>
        <a href="index.php">Back</a>
    </body>
</html>

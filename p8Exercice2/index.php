<?php
// Start the session(need to be the first lign of php)
session_start(); // Permet de transmettre des données d'une page à l'autre
// Set session variables
$_SESSION['lastname'] = 'Winieski';
$_SESSION['firstname'] = 'Kévin';
$_SESSION['age'] = '54';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <a href="user.php">User page</a>
    </body>
</html>

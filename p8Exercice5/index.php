<?php
// isset vérifie que le login existe.
if(!empty($_POST['login'])) {
// Définition du cookie
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true); //crée le cookie pour le login
}
// isset vérifie que le password existe.
if(!empty($_POST['password'])) {
// Définition du cookie
setcookie('password', $_POST['password'], time() + 365 * 24 * 3600,'/', null, false, true); // créer le cookie pr le password
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Exercice 5 Partie 8</h1>
        <p>Veuillez modifier votre identifiant et mot de passe</p>
      <!-- création du formulaire -->
    <form action="index.php" method="POST" >
        <div><label>Votre login : <input type="text" name="login" id="login"></label></div>
        <div><label>Votre mot de passe : <input type="password" name="password" id="password"></label></div>
        <div><input type="submit" value="Valider"/></div>
    </form>
    <!-- Vérifie si le post existe et a une valeur avant d'afficher le cookie -->
    <?php if(!empty($_POST['login'])) { ?>
      <p><?php echo $_COOKIE['login'] ?></p>
    <?php } else { ?>
      <p>Login n'existe pas</p>
    <?php } ?>
    <!-- Vérifie si le post existe et a une valeur avant d'afficher le cookie -->
    <?php if(!empty($_POST['password'])) { ?>
      <p><?php echo $_COOKIE['password'] ?></p>
    <?php } else { ?>
      <p>Password n'existe pas</p>
    <?php } ?>
    </body>
</html>

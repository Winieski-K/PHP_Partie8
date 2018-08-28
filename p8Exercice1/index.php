<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
       <?php echo $_SERVER['HTTP_USER_AGENT']; ?> <!-- Permet de récupérer l'user agent  -->
       <br />
       <?php echo $_SERVER['REMOTE_ADDR']; ?> <!-- Permet de récupérer l'ip de l'utilisateur -->
       <br />
       <?php echo $_SERVER['SERVER_NAME']; ?> <!-- Permet de récupérer le nom du serveur -->
    </p>
  </body>
</html>

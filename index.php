<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
  <title>home</title>
</head>
<body>
  <img src="logo_lb.png" class="logo">
<?php
   $connect = mysqli_connect("localhost", "root", "root", "league_battles");
  $all = "SELECT * FROM users";
  $insert = mysqli_query($connect, $all);
  if (isset($_POST['index']))
  {
    $pseudo = $_POST ['pseudo'];
    $password = $_POST ['password'];
    $requete = "INSERT INTO users VALUES ('', '$pseudo', '$prenom', '$nom', '$mail', '$password')";
    $query = mysqli_query($connect, $requete);
  }
  ?>
  <form action="profil.html" method="post">
    <p>Pseudo</p>
    <input type="text" name="pseudo" size=""/><br>
    <p>Mot de passe</p>
    <input type="text" name="mdp" size=""/><br>
    <a href="signup.php">Créer un compte</a>
    <input type="submit" name="login"/>


  </form>
   <?php
  mysqli_close($connect);
  ?>
</body>
</html>

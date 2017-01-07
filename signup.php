<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sign up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <img src="logo_lb.png" class="logo">

  <?php
  $connect = mysqli_connect("localhost", "root", "root", "league_battles");
  $all = "SELECT * FROM users";
  $insert = mysqli_query($connect, $all);
  if (isset($_POST['signup']))
  {
    $pseudo = $_POST ['pseudo'];
    $prenom = $_POST ['prenom'];
    $nom = $_POST ['nom'];
    $mail = $_POST ['mail'];
    $password = $_POST ['password'];
    $requete = "INSERT INTO users VALUES ('', '$pseudo', '$prenom', '$nom', '$mail', '$password')";
    $query = mysqli_query($connect, $requete);
  }
  ?>
  <form action="index.php" method="post">
    <p>Pseudo</p>
    <input type="text" name="pseudo" required="required"/><br>
    <p>Prénom</p>
    <input type="text" name="prenom" required="required"/><br>
    <p>Nom</p>
    <input type="text" name="nom" required="required"/><br>
    <p>Mail</p>
    <input type="text" name="mail" required="required"/><br>
    <p>Mot de passe</p>
    <input type="text" name="password" required="required"/><br>
    <p>Confirmation du mot de passe</p>
    <input type="text" name="mdpcheck" required="required"/><br>

    <input type="submit" name="signup" value="Confirmer"/>


  </form>

  <?php
  mysqli_close($connect);
  ?>
</body>
</html>

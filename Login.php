<?php
session_start(); // Démarrer la session

// Afficher le message d'erreur s'il est présent
if (isset($_SESSION['error'])) {
    echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']); //Supprimer le message d'erreur de la session
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1 style="text-decoration-color: green;">SURVEILLANCE AU NIVEAU PHARMACIE<br>
<img src="sary\icone1.png"
style="text-align: center;
width: 70px;
height: 70px;
border-radius: 10px;" id="myImage" name="myImage">
</h1>  
<script>
  function mdp(){
    alert("veuiller contacter votre administrateur système<br> 034 03 887 72");
     window.location.href ="login.php";
  }
  </script>
  <form method="post" action="utilisateur.php" style="margin-top: 50px;">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password">
    <a href="#" style="text-align: right;" id="mdpoublier" onclick="mdp()">mot de passe oublier?</a>
    <br><br>
    <input type="submit" value="Se connecter">
    
  </form>
  <br><br>
  <footer>
  <img src= "sary\logo-ministere-sante.jpg" alt="Logo-Ministere">
  <p> <script type="text/javascript"> 
	  var today=new Date();
  </script>© <script>
	 console.log(today.getFullYear());
  </script> Ministère de la Santé Pulblidue de Madagascar<br>
<br>Direction de la Veille Sanitaire, de la Surveillance Epidémiologique et Riposte</p>
    <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
</footer>
</body>
</html>

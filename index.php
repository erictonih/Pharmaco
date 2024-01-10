<?php
// Vérification de l'authentification
session_start();
if (!isset($_SESSION["user_id"])) {
    // Utilisateur non connecté, redirection vers la page de connexion
    header("Location: login.php");
    exit(); // Assurez-vous de sortir du script après la redirection
}

// ... Reste du contenu de la page d'index ...
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHARMACO_VIGILLANCE</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
	<style>
	header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }
    h1 {
      margin: 0;
    }
	</style>
 <script src="jquery.js"></script>
</head>
<body>
<div class="c1 container-fluid text-light pb-5 clearfix pl-0 mt-0">
        <nav class="nav navbar navbar-dark navbar-expand-md">
            <div class="container d-flex">
                <a href="sary/logo-ministere-sante.jpg" class="nb navbar-brand text-light b"> <img src="sary/icone1.png"> </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nv35">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-auto float-right" id="nv35">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">Deconnection</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
</div>
<div id="button-container">
<script>
        // Fonction de redirection vers la page de formulaire
        function rediriger() {
            window.location.href = "formulaire.php";
        }
        function medoc(){
            window.location.href = "visualisation_de_donnée.php";
        }
    </script>
    <center>
      <button class="button button-1 px-5 py-3 mt-5 text-center" onclick="rediriger()"> SAISIE DE DONNES</button>
      <button class="button button-2 px-5 py-3 mt-5 text-center" onClick="medoc()">VISUALISATION DES DONNES </button>
    </center>
  </div>
<footer>
  <img src= "sary\logo-ministere-sante.jpg" alt="Logo-Ministere">
  <p>© 2023 Ministère de la Santé Pulblidue de Madagascar<br>
<br>Direction de la Veille Sanitaire, de la Surveillance Epidémiologique et Riposte</p>
    <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
</footer>
</html>
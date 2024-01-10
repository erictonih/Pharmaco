<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pharmacie";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Récupération des données soumises par le formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Recherche de l'utilisateur dans la base de données
    $sql = "SELECT user_id FROM utilisateurs WHERE username='$username' AND mdp='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // L'utilisateur a été trouvé dans la base de données, donc il est connecté
      session_start();
      $_SESSION["user_id"] = $username;
      header("Location: index.php"); // Redirection vers la page d'accueil
      exit;
    } else {
      // En cas d'erreur, stocker un message d'erreur dans la session
      $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
      echo "<script> 
      alerte(Identifiant ou mot de passe incorrect);</scripti>";
      header('Location: login.php'); // Rediriger vers la page de connexion
      exit();
    }
    $conn->close();
    // Après la connexion réussie, définissez la session pour l'utilisateur
  }
  ?>
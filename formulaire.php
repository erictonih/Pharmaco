<!DOCTYPE html>
<html lang="fr">
<head>
	<title>PHARMACO_VIGILLANCE</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
<header>
<div id="myImage">
<img src="sary\icone1.png">
</div>
    <h2>Pharmaco-Vigillance</h2>
    <body>
<div class="c1 container-fluid text-light pb-5 clearfix pl-0 mt-0">
        <nav class="nav navbar navbar-dark navbar-expand-md">
            <div class="container d-flex">
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
  </header><br><br>
	<form method="POST" action="action.php">
  <div class="titre" >Veillez saisisser les information concernants le client</div>
    <br>
		<label for="id">Identifiant :</label>

    <input type="text" id="id" name="identifiant" >

		<label for="Nom">Nom :</label>
		<input type="text" id="Nom" name="Nom" required>

		<label for="Prenom">Prenom :</label>
		<input type="text" id="Prenom" name="Prenom" required>

    <label for="age">Age :</label>
		<input type="number" id="age" name="age" required>
    <br>    <br>  
		<label for="sex">Sexe :</label>
		<select id="sex" name="sex" placeholder="Sexe du client">
			<option value="masculin">Masculin</option>
			<option value="feminin">Feminin</option>
		</select><br>
    <p1>Séléctionnée le type de client:</p1>
      <br>
        <input type="radio" id="type_Amb" name="type_client" style="font-family: Times New Roman, serif" value="Ambulatoire">
        <label for="type_Amb">Ambulatoire</label>
        <input type="radio" id="type_Hosp" name="type_client" value="Hospitalisé">
        <label for="type_Hosp">Hospitalisé(e)</label><br>
    <label for="adresse">Résidence :</label>
		<input type="text" id="adresse" name="adresse" required>
    <br>
   	<input type="submit" value="Envoyer">
	</form>
</body>
<footer>
  <img src= "sary\logo-ministere-sante.jpg" alt="Logo-Ministere">
  <p><script type="text/javascript"> 
	  var today=new Date();
  </script>©<script>
	 console.log(today.getFullYear());
  </script> Ministère de la Santé Pulblidue de Madagascar<br>
<br>Direction de la Veille Sanitaire, de la Surveillance Epidémiologique et Riposte</p>
    <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
</footer>
</html>

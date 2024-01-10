<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pharmacie";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT Id, Nom, Prenom FROM client ORDER BY date_de_sousmission DESC LIMIT 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $dernierIdentifiant = $row["Id"];
    $dernierNom = $row["Nom"];
    $dernierPrenom = $row["Prenom"];
} else {
    
}
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
    
<div class="c1 container-fluid text-light pb-5 clearfix pl-0 mt-0">
        <nav class="nav navbar navbar-dark navbar-expand-md">
            <div class="container d-flex">
                <a href="#" class="nb navbar-brand text-light b"> <img scr="sary/icone1.png"></a>
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
                    </ul>
                </div>
                
            </div>
        </nav>
</div>
<br>
<form method="POST" action="traitement-medoc.php">
  <div class="titre" >Information du Client:</div>
    <br>
		<label for="id">Identifiant :</label>
    <input type="text" id="id" placeholder="<?php echo "$dernierIdentifiant"?>">
        <label for="Nom">Nom :</label>
		<input type="text" id="Nom" placeholder="<?php echo "$dernierNom"?>">

		<label for="message">Prenom :</label>
		<input type="text" id="Prenom" placeholder="<?php echo "$dernierPrenom"?>">

        <p>Type de médicament acheté :</p>
        
        <div class="checkbox-group">
            <input type="checkbox" id="Anti" name="type_medoc[]" value="Antibiotique" data-target="sousQuestionAutre_Anti">
            <label for="Anti">Antibiotique</label>
            
            <div class="sous-question" id="sousQuestionAutre_Anti" style="display:none">
                <label for="autreQuestion_Anti">Nombre de plaquettes pour Antibiotique : </label>
                <input type="number" id="autreQuestion_Anti" name="autre_question_Antibiotique">
            </div>
        
            <input type="checkbox" id="Antipy" name="type_medoc[]" value="Antipyrétique" data-target="sousQuestionAutre_Antipy">
            <label for="Antipy">Antipyrétique</label>
            
            <div class="sous-question" id="sousQuestionAutre_Antipy" style="display:none">
                <label for="autreQuestion_Antipy">Nombre de plaquettes pour Antipyrétique : </label>
                <input type="number" id="autreQuestion_Antipy" name="autre_question_Antipyrétique">
            </div>
        
            <input type="checkbox" id="Anta" name="type_medoc[]" value="Antalgique" data-target="sousQuestionAutre_Anta">
            <label for="Anta">Antalgique</label>
            
            <div class="sous-question" id="sousQuestionAutre_Anta" style="display:none">
                <label for="autreQuestion_Anta">Nombre de plaquettes pour Antalgique : </label>
                <input type="number" id="autreQuestion_Anta" name="autre_question_Antalgique">
            </div>
        
            <input type="checkbox" id="Antidi" name="type_medoc[]" value="Antidiarrhéique" data-target="sousQuestionAntidi">
            <label for="Antidi">Antidiarrhéique</label>
            
            <div class="sous-question" id="sousQuestionAntidi" style="display:none">
                <label for="autreQuestionAntidi">Nombre de plaquettes pour Antidiarrhéique : </label>
                <input type="number" id="autreQuestionAntidi" name="autre_question_Antidiarrhéique">
            </div>
        
            <input type="checkbox" id="Vit" name="type_medoc[]" value="VitamineC" data-target="sousQuestionAutre_Vit">
            <label for="Vit">Vitamine C</label>
            
            <div class="sous-question" id="sousQuestionAutre_Vit" style="display:none">
                <label for="autreQuestion_Vit">Nombre de plaquettes pour Vitamine C : </label>
                <input type="number" id="autreQuestion_Vit" name="autre_question_VitamineC">
            </div>
        </div>
   	<input type="submit" value="Envoyer">
	</form>
    <script>
        // Afficher la sous-question appropriée lorsque des cases sont cochées
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const sousQuestions = document.querySelectorAll('.sous-question');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const sousQuestionId = this.getAttribute('data-target');
                const sousQuestion = document.getElementById(sousQuestionId);
                
                if (this.checked) {
                    sousQuestion.style.display = 'block';
                } else {
                    sousQuestion.style.display = 'none';
                }
            });
        });
    </script>
<footer>
  <img src= "sary\logo-ministere-sante.jpg" alt="Logo-Ministere">
  <p>© 2023 Ministère de la Santé Pulblidue de Madagascar<br>
<br>Direction de la Veille Sanitaire, de la Surveillance Epidémiologique et Riposte</p>
    <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
</footer>
</html>
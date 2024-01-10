<?php

//use function PHPSTORM_META\type;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacie";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = "SELECT Id, Nom, Prenom, date_de_sousmission FROM client ORDER BY date_de_sousmission DESC LIMIT 1";
$result = $conn->query($id);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$dernierIdentifiant = $row["Id"];
$dernierNom = $row["Nom"];
$dernierPrenom = $row["Prenom"];
$date= $row["date_de_sousmission"];
} else {

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["type_medoc"]) && is_array($_POST["type_medoc"])) {
        foreach ($_POST["type_medoc"] as $index => $type) {
           $type=$type;
           $nombre_field="autre_question_".$type;
           $nombre=$_POST[$nombre_field];
            $sql = "INSERT INTO medicament (Type, Nombres, id_client, date) VALUES ('$type', '$nombre', '$dernierIdentifiant', '$date')";
            if ($conn->query($sql) === true) {
                $resultat = "Enregistrement des Données dans la Base ,Type: $type, Nombre: $nombre";
                echo "<script>alert('$resultat'); window.location.href = 'index.php';</script>";
            } else {
                echo "Erreur d'insertion : " . $conn->error;
            }
        }
    }
}

$conn->close();
?>

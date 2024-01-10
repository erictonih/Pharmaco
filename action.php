<?php
$host = 'localhost';
$dbname = 'pharmacie';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Paramètres pour afficher les erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

if (isset($_POST['identifiant'], $_POST['Nom'], $_POST['Prenom'], $_POST['age'], $_POST['type_client'], $_POST['adresse'])) {
    $id = $_POST['identifiant'];
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $age = $_POST['age'];
    $type_client = $_POST['type_client'];
    $adresse = $_POST['adresse'];
    date_default_timezone_set('Europe/Moscow');
    $date = date('y-m-d h:i:s');

    $sql = "INSERT INTO client (Id, Nom, Prenom, Age, Type, Residence, date_de_sousmission) VALUES (:identifiant, :Nom, :Prenom, :age, :type_client, :adresse, :date)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':identifiant', $id);
    $stmt->bindParam(':Nom', $nom);
    $stmt->bindParam(':Prenom', $prenom);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':type_client', $type_client);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':date' , $date);
    
    if ($stmt->execute()) {
        $resultat = "Enregistrement des Données dans la Base  $nom $prenom";
        echo "<script>alert('$resultat'); window.location.href = 'medicament.php';</script>";
    } else {
        echo "Erreur lors de l'ajout de l'enregistrement.";
    }
}

?>

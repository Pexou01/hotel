<?php

session_start();


$nom = filter_input(INPUT_POST, "nom");
$prenom = filter_input(INPUT_POST, "prenom");
$adresse = filter_input(INPUT_POST, "adresse");
$cp = filter_input(INPUT_POST, "cp");
$ville = filter_input(INPUT_POST, "ville");
$pays = filter_input(INPUT_POST, "pays");
$info = filter_input(INPUT_POST, "info");
$du = filter_input(INPUT_POST, "date");
$au = filter_input(INPUT_POST, "date1");

echo"<div name=info id=info>";

$_SESSION["nom"]=$nom;
        $_SESSION["prenom"]=$prenom;
echo"</div>";

echo "<h1>Bonjour</h1> Mr  " . $data['prenom'] . '   ' . $data['nom'] . "<br>";
echo "Votre adresse :   " . $data['adresse'] . "   " . "Votre cp :  " . $data['cp'] . "votre ville :   " . $data['ville'] . "<br>";
echo $data['pays'];
echo "Information sur votre réservation : " . $data['info'] . "<br>";
echo "du : " . $data['date'] . "au : " . $data['date1'];
?>    



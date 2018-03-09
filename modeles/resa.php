<?php
try {
   
while ($data ->fetch()){
echo "<h1>Bonjour</h1> Mr  ".$data['prenom'].'   '.$data['nom']."<br>";
echo "Votre adresse :   ".$data['adresse']."   "."Votre cp :  ".$data['cp']."votre ville :   ".$data['ville']."<br>";

echo "Information sur votre réservation : ".$data['info']."<br>";
echo "du : ".$data['du']."au : ".$data['au'];      
   }
} catch (exception $e) {
    die('Erreur ' . $e->getMessage());
}

         

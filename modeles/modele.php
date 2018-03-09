<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=hotel_de_paris', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (exception $e) {
    die('Erreur ' . $e->getMessage());
}
$base->exec("SET CHARACTER SET utf8");
$retour = $base->query("SELECT * FROM hotel_de_paris.rooms r INNER JOIN hotel_de_paris.hostels h ON r.id_hostel = h.id_hostel");
echo "<select name=info id=info multiple class=form-control>";
while ($data = $retour->fetch()) {
    echo "<option> Nom de l'hotel : <br>" ." $data[name] , Adresse : $data[address], capacité de la chambre : $data[capacity], Sont prix : $data[price] euros</option>";

    echo $data[address];
}

           try {

    $base->exec("SET CHARACTER SET utf8");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nom = filter_input(INPUT_POST, "nom");
    $prenom = filter_input(INPUT_POST, "prenom");
    $adresse = filter_input(INPUT_POST, "adresse");
    $cp = filter_input(INPUT_POST, "cp");
    $ville = filter_input(INPUT_POST, "ville");
    $pays = filter_input(INPUT_POST, "pays");
    $info = filter_input(INPUT_POST, "info");
    $du = filter_input(INPUT_POST, "date");
    $au = filter_input(INPUT_POST, "date1");


    $cmd = $base->prepare('INSERT INTO  locations (nom, prenom, adresse, cp, ville, pays, info, du, au) VALUES (?,?,?,?,?,?,?,?,?)');
    $cmd->bindParam(1, $nom ,PDO::PARAM_STR);
    $cmd->bindParam(2, $prenom , PDO::PARAM_STR);
     $cmd->bindParam(3, $adresse , PDO::PARAM_STR);
     $cmd->bindParam(4, $cp , PDO::PARAM_STR);
     $cmd->bindParam(5, $ville , PDO::PARAM_STR);
     $cmd->bindParam(6, $pays , PDO::PARAM_STR);
     $cmd->bindParam(7, $info, PDO::PARAM_STR);
     $cmd->bindParam(8, $du , PDO::PARAM_STR);
      $cmd->bindParam(9, $au , PDO::PARAM_STR);
     
    $cmd->execute();
$base->exec("SET CHARACTER SET utf8");
    $retour1 = $base->query("SELECT * FROM locations ");
while ($data = $retour1->fetch()){
echo "<h1>Bonjour</h1> Mr  ".$data['prenom'].'   '.$data['nom']."<br>";
echo "Votre adresse :   ".$data['adresse']."   "."Votre cp :  ".$data['cp']."votre ville :   ".$data['ville']."<br>";

echo "Information sur votre réservation : ".$data['info']."<br>";
echo "du : ".$data['du']."au : ".$data['au'];      
   }

} catch (exception $e) {
    $base = null;
    echo 'Erreur ' . $e->getMessage();
}
         

     







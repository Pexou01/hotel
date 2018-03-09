
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf8_general_ci">
        <link rel="stylesheet" href="../css/styles.css"/>
        <title>Hotel de paris</title>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
                crossorigin="anonymous">
        </script>
     
    </head>
    <body>
        <h1>Réservation</h1>
        <form method="POST" action="../modeles/modele.php" >
        <br>
        <div>
            <label>Nom</label>
               <input type=text name=nom id=nom ><br>
                 <label>prenom</label>
                 <input type=text name=prenom id=prenom ><br>
                 <label>adresse</label>
                 <input type=text name=adresse id=adresse ><br>
                 <label>Cp</label>
                 <input type=text name=cp id=cp ><br>
                 <label>Ville</label>
                 <input type=text name=ville id=ville ><br>
                 <label>Pays</label>
                 <select name="pays" id="pays">
                     <option>France</option>
                     <option>Usa</option>
                     <option>Italie</option>
                 </select><br>
                 <label>du</label>
                 <input type=date name=date1 id=du ><br>
                 <label>au</label>
                 <input type=date name=date id=au ><br><br>
                 <button type="POST" name=recherche id=valide>Reserver chambre</button>
               <?php
      echo"<div name=info id=info>";
         include '../modeles/modele.php';
         include '../modeles/resa.php';
      echo"</div>";
      
        ?>
               
               
        </div></form>
           

         
           
   </form>
        </div>
       
    </body>
</html>

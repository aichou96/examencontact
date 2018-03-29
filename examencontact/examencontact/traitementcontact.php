<?php

require('connexion.php');
 $requete=$connec->prepare('INSERT INTO repertoire(nom,prenom,adresse)
            VALUES(?,?,?)');

$requete->execute(array(
      
            $_POST['nom'],
            $_POST['prenom'],
          $_POST['adresse'],
          ));


header('affiche.php');

?>
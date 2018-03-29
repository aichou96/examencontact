



<?php
require('connexion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-size: 24pt; background-color: GhostWhite  ">
<img src="bien.jpg" style="margin-left: 30%;width: 30%"> <br>
<?php
$reponse=$connec->query('SELECT nom,prenom,adresse from repertoire  WHERE id= (SELECT MAX(id) from repertoire)');
while ($donnees=$reponse->fetch()) {

   echo "  Bonjour,<b>"   .$donnees['prenom'].  " ".$donnees['nom']. "</b> <br>"; echo"<br>";echo " Celon les informations que vous avez saisi:<br>";  echo"<br>";echo " Vous habitez à <b>".$donnees['adresse']." </b>dans la ville de <b>"

   echo"<br>";
    echo "Aujourd'huit est une très belle journée n'est ce pas!!!!!!. <br>";
	echo"<br>";
	echo "Un conseil :<br>";
	echo "La vie est trop courte pour se reveiller avec des regrets , alors Vit la au fond, aime les gens qui te traitent bien et oublient les autres";


}

$reponse->closeCursor();
?>

	</body>
</html>

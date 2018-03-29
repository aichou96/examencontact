<?php
try{

$server="localhost";
$login="root";
$passwd="root";

$connec =new PDO('mysql:host='.$server.'; dbname=contact;charset=utf8',$login,$passwd);}

catch (Exception $e)
{       
        header('Location:erreur.php');
       

}
?>

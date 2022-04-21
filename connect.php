<?php
// connexion a la base de donnee

$hote="localhost";
$login="root";
$pwd="";
$base="recette";
//connexion au serveur
$connexion=mysqli_connect($hote, $login, $pwd, $base)
or die ("Erreur connexion ! ".mysqli_connect_error());


function addRecipte(){

}
 ?>

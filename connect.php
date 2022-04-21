<?php
// connexion a la base de donnee

$hote="localhost";
$login="root";
$pwd="";
$base="recette";
//connexion au serveur
$connexion=mysqli_connect($hote, $login, $pwd, $base)
or die ("Erreur connexion ! ".mysqli_connect_error());

function showRecipe(){
  $query="SELECT * FROM recette";
  $result=mysqli_query($connexion, $query) or die ('ERREUR '.mysqli_error());
  $info = mysqli_fetch_array($connec);
  echo "Id :".$info["id"]."\nNom : ".$info["nom"]."\nDescription : ".$info["description"];
}

function addRecipte(){

}

function deleteRecipe(){
  
}
 ?>

<?php
// connexion a la base de donnee

$hote="localhost";
$login="root";
$pwd="";
$base="recette";
//connexion au serveur
$connexion=mysqli_connect($hote, $login, $pwd, $base) or die ("Erreur connexion ! ".mysqli_connect_error());

function showRecipe(){
  $query="SELECT * FROM recette";
  $result=mysqli_query($connexion, $query) or die ('ERREUR '.mysqli_error());
  $info = mysqli_fetch_array($result);
  echo "Id :".$info["id"]."\nNom : ".$info["nom"]."\nDescription : ".$info["description"];
}

// test
showRecipe();

function deleteRecipe($id){
  $query="DELETE FROM recette WHERE id = ".$id;
  $result=mysqli_query($connexion, $query) or die ('ERREUR '.mysqli_error());
  echo "Recette ".$id." supprimée";
}

ini_set('soap.wsdl_cache_enabled', 0);

$serversoap=new SoapServer("http://localhost/projet/Server.wsdl");

$serversoap->addFunction("showRecipe");
$serversoap->addFunction("deleteRecipe");
$serversoap->handle();

 ?>

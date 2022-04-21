<?php
function connect(){
  // connexion a la base de donnee

  $hote="localhost";
  $login="root";
  $pwd="";
  $base="recette";
  //connexion au serveur
  $connexion = new PDO("mysql:host=$hote;dbname=$base", $login, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

// fonction qui affiche toutes les recettes
function showRecipe(){
  $conn = connect();
  $query="SELECT * FROM recette";
  $result = $conn->prepare($query);
  $result->execute();
  $ligne = $result->fetch(PDO::FETCH_ASSOC);
  while($ligne){
      echo "Id :".$ligne["id"]."\nNom : ".$ligne["nom"]."\nDescription : ".$ligne["description"];
  }
}

// test
showRecipe();

// fonction qui delete une recette avec son ID
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

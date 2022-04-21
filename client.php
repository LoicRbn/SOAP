<?php
ini_set('soap.wsdl_cache_enabled', 0);

$service=new SoapClient("http://localhost/projet/Server.wsdl");
$taballservices=$service->showRecipe();
//$taballdelete=$service->deleteRecipe(1);
print_r($taballservices);
//print_r($taballdelete);
?>

<?php
ini_set('soap.wsdl_cache_enabled', 0);

$service=new SoapClient("http://localhost/projet/Server.wsdl");
$taballservices=$service->retourDate();
print_r($taballservices);
?>

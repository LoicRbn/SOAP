<?php
//phpinfo();
function retourDate(){
$date=date("d/m/Y");
$tab['date']=$date;
return $tab;
}

function retourHeure(){

}

ini_set('soap.wsdl_cache_enabled', 0);

$serversoap=new SoapServer("http://localhost/projet/Server.wsdl");

$serversoap->addFunction("retourDate");
$serversoap->addFunction("retourHeure");
$serversoap->handle();

error_reporting(1);

?>

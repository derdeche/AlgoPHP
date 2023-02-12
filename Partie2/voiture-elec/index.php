<?php

require_once "exo14.php";

$v1= new voiture( "peugeot", "408");
$ve1= new voiturelec ("BMW","I3",100);


echo $v1->getInfos()."<br/>";

echo $ve1->getinfos()."<br/>";

?>

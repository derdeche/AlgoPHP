<?php

require_once "exo14.php";

$v1= new voiture( "peugeot", "408");
<<<<<<< HEAD
$ve1= new voiturelec ("BMW","I3",100);


echo $v1->getInfos()."<br/>";

echo $ve1->getinfos()."<br/>";
=======
$ve1= new voiturelec ("BMW","I3","100");


echo $v1->getinfos()."<br/>";

echo $ve1->getInfos()."<br/>";
>>>>>>> d598b763bf21629b924c9d08e23cade1f5e78577

?>

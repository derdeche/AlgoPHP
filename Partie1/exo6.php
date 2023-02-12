<h1>Exercice6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, 
son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<h2>Résultat</h2>

<?php
$unit = '9.99';
$ht= $unit*5;
$mtva = $ht*0.2;/*calcule tva*/
$facture = $mtva+$ht;
echo"Le montant de la facture à régler est de $facture";


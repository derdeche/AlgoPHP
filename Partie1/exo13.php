<h1>Exercice13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient).
Elle devra être affichée avec 2 décimales.<br>
<p>Affichage :</p><br>
<p>Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9</p><br>
<p>Sa moyenne générale est donc de : 11.22</p>
<h2>Résultat</h2>

<?php

$note = ['10','12','8','19','3','16','11','13','9'];
$moyenne= array_sum($note)/9; /*somme tableau*/
$moyenne = number_format("$moyenne",2,",",","); /*format d'affichage*/
echo "$moyenne <br>";


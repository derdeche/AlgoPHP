<h1>Exercice14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p><br>
<p>Affichage (si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985 :</p><br>
<p>Age de la personne : 33 ans 4 mois 4 jours</p>
<h2>Résultat</h2>




<?php


$bday = new DateTime('17.01.1985'); // Années de naissance
$today = new Datetime(date('21.05.2018')); // Date aujourdhui
$diff = $today->diff($bday);
printf(' Age de la personne : %d ans  %d mois  %d jours', $diff->y, $diff->m, $diff->d);
printf("\n");
?>

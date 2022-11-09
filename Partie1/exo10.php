<h1>Exercice10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur 
    un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>
<h2>Résultat</h2>

<?php

$MPayer = "152";
$MVersé = "200";
$reste = ($MVersé - $MPayer);
 echo "Montant à payer : $MPayer <br> ";
 echo " Montant versé : $MVersé <br>";
 echo " Reste à payer : $reste <br>";
 $billet10 = intdiv($reste, 10);
 $reste =  $reste - 10* $billet10;
 $billet5 = intdiv($reste,5);
 $reste = $reste - 5* $billet5;
 $piece2 = intdiv($reste,2) ;
 $reste = $reste - 2* $piece2;
 $piece1 = intdiv($reste,1);
 echo "$billet10 billets de 10 € - $billet5 billet de 5 € - $piece2 pièce de 2 € - $piece1 pièce de 1 €";

 



<h1>Exercice9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
<h2>Résultat</h2>

<?php
$sexe = 'femme';
$age = '50';
$cond1 = $sexe ="femme" && ( $age <= 18 && $age <=35);
$cond2 = $age > 20 &&  $sexe == "homme" ;

if($cond1 || $cond2 ){
    echo "Imposable <br>";

}
else {
   
    echo " Non Imposable";
}
    
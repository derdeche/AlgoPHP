<h1>Exercice9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
<h2>Résultat</h2>

<?php
$sexe = 'homme';
$age = '19';
$cond1 = $sexe =="femme" && ( $age <= 18 && $age <=35);
$cond2 = $age > 20 &&  $sexe == "homme" ;
    echo "Age : $age <br>";
    echo "Sexe : $sexe <br> ";

if($cond1 || $cond2 ){
    
    echo "La personne est Imposable. <br>";
}
else {
   
    echo " La personne est Non Imposable";
}


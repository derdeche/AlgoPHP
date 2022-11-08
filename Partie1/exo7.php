<h1>Exercice7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie 
d’un enfant en fonction de son âge</p>
<p>POUSSIN : entre 6 et 7 ans</p><br>
<p>PUPILLE : entre 8 et 9 ans</p><br>
<p>MINIME : entre 10 et 11 ans</p><br>
<p>CADET : à partir de 12 ans</p><br>
<p>Si la catégorie n'est pas gérée, merci de le préciser.</p><br>
<h2>Résultat</h2>

<?php
$age= '14120';
if ($age ==6 || $age ==7){
echo "Catégorie POUSSIN";
}
elseif($age ==8 || $age ==9)
{
    echo "Catégorie PUPILLE";
}
if ($age ==10 || $age ==11){
    echo " Catégorie MINIME";
}
elseif ($age >12){
    echo "Catégorie CADET";
}

<h1>Exercice9</P>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre
("Monsieur","Madame","Mademoiselle")</P>
<h2>Exemple :</h2>
<p>afficherRadio($nomsRadio);</P>

<h3>Résultat</h3>


<?php


$nomsRadio =  array('Monsieur','Madame','Mademoiselle');


echo afficherRadio($nomsRadio);

function afficherRadio($nomsRadio){

$result="";

    foreach($nomsRadio as $case){
    $result .= "<input type='radio' name='case' >";
    $result .= "<label for='$case'>$case</label><br>";

}


return $result;
}

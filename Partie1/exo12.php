<h1>Exercice</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms 
et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective 
(français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>
<h2>Résultat</h2>


<?php

$prenom = ['Michael' =>'FRA','Virgile' => 'ESP', 'Marie-Claire' => 'ENG'];

ksort($prenom);

foreach($prenom as $a => $valeur){
    


    if($valeur == 'FRA')
    {
        echo "salut $a <br>";

    }
    elseif($valeur == 'ESP')
    {
        echo "hola $a <br>";
    }
    else

        echo "hello   $a  <br>" ;

}

?>

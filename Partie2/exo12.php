<h1>Exercice12</h1>
<P>La fonction var_dump($variable)permet d’afficher les informations d’une variable.<br>
Soit le tableausuivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p><br>
<h2>Affichage</h2>
<p>bool(true)<br>
     string(5) "texte"<br>
     int(10)<br>
     float(25.369)<br> 
     array(2)<br> 
     { [0]=> string(7) "valeur1" [1]=> string(7) "valeur2" }</p><br>

<h1>Exercice12</h1>
<P>La fonction var_dump($variable)permet d’afficher les informations d’une variable.<br>
Soit le tableausuivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p><br>
<h2>Affichage</h2>
<p>bool(true)<br>
     string(5) "texte"<br>
     int(10)<br>
     float(25.369)<br> 
     array(2)<br> 
     { [0]=> string(7) "valeur1" [1]=> string(7) "valeur2" }</p><br>

<?php

<<<<<<< HEAD
=======
<?php

>>>>>>> d124fd81a2e333aae0d1b57cd8c65aae46168933
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

function vardump($tableauValeurs){

    $resultat="";

        foreach($tableauValeurs as $valeur){

            $resultat.= var_dump($valeur);
        }

        return $resultat; 
}       

<<<<<<< HEAD
echo vardump($tableauValeurs);
=======
echo vardump($tableauValeurs);

>>>>>>> d124fd81a2e333aae0d1b57cd8c65aae46168933

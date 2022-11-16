<h1>Exercice6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</P>
<h2>Exemple :</h2>
<p>$elements = array("Monsieur","Madame","Mademoiselle");<br>
AlimenterListeDeroulante($elements)</P><br>

<h3>Résultat</h3>



<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function AlimenterListeDeroulante($elements){
    $result= "";

    $result.= "<label for= 'choix'></label> <br>";

    $result.="<select name='choix' id='choix'>";
    
    

        foreach ($elements as $genre){
            $result.= "<option value ='$genre'>$genre</option>";
        
        }
        return $result;

}
    echo AlimenterListeDeroulante($elements);
?>

<h1>Exercice7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le 
tableau associatif si la case est cochée ou non.</P>
<h2>Exemple :</h2>
<p>genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</P>

<h3>Résultat</h3>

<?php   





$elements = array('Choix 1'=>"",'Choix 2'=>"checked",'Choix 3'=>"");


function genererCheckbox($elements){

    $result="";

    foreach($elements as $case => $checked){

        $result .= "<input type='checkbox' name='$case' $checked >";

        $result .= "<label for='$case'>$case</label><br>";

        

        

        
       
    }
    return $result;

}

echo genererCheckbox($elements);

?>
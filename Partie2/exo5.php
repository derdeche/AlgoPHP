<h1>Exercice5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</P>
<h2>Exemple :</h2>
<p>$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);</P>

<h3>Résultat</h3>


<label for="utilisateur">Nom</label><br>
<input type="text"  name="Nom" /><br>
<label for="utilisateur">Prénom</label><br>
<input type="text"  name="Nom" /><br>
<label for="utilisateur">Ville</label><br>
<input type="text"  name="Nom" /><br>

<?php

$nomsInput = array("Nom","Prénom","Ville");
echo afficherInput($nomsInput);

function afficherInput($nomsInput){

    foreach ($nomsInput as $utilisateur){
        $resultat.= "<label for='$utilisateur'><br>$utilisateur</label><br><input type='texte' name= $utilisateur<br>";
        
    }
 return $resultat;
}

















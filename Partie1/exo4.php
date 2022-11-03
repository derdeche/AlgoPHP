<h1>exercice 4</h1> 
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php
$phrase = "Engage le jeu que je le gagne";
$minus = strtoupper("$phrase"); /* mettre tt les majuscules en minuscules*/
$replaced = str_replace(' ', '',$minus); /*enlever les espaces*/
strrev("$replaced"); /*inverser la phrase*/
if ($replaced == strrev("$replaced")){
    echo "$phrase est une phrase palindrome";
}
else {
    echo "$phrase n'est pas une phrase palindrome";
}


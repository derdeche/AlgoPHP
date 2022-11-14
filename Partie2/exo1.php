<h1>Exercice1</h1>
<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne 
de caractère passée en argument en majuscules et en rouge.</p><br>
<p>Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);</p><br>
<p>Affichage(si $texte = «Mon texte en paramètre»),MON TEXTE EN PARAMETRE</p>

<h2>Résultat</h2>


<style>
    .red {
        color: red;
}

</style>

<?php



$text = "Mon texte en paramètre";
$text2 = "Mon texte en paramètre 2 ";

echo convertirMajRouge2($text);

echo convertirMajRouge($text);

echo convertirMajRouge($text2);


function convertirMajRouge($text) {



    $resultat = mb_strtoupper($text); //convertir en majuscule
    $resultat = "<p class= 'red'> $resultat</p>";
   

    return $resultat;
    
}

 function convertirMajRouge2($text)
 {
    return "<p class='red'>".mb_strtoupper($text)."</p>";
 }
 ?>
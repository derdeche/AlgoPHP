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




echo convertirMajRouge($text);


function convertirMajRouge($text) {



    $resultat = mb_strtoupper($text);
    $resultat = "<p class= 'red'> $resultat</p>";
   

    return $resultat;
    
}

<h1>Exercice5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
 Attention, la valeur générée devra être arrondie à 2 décimales.</p>
 <h2>Résultat</h2>

 <?php
 $francs = "100";
 $euro = $francs*0.1524;
 $euro = number_format("$euro",2,",",".");
 
 echo"la valeur en euros et $euro";

<h1>Eexrcice8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication 
    d’un nombre
 passé en paramètre sous la forme:</p>

 <h2>Résultat1</h2>
 
 <?php


 $nombre = '2';    
 
 
for ($i='1'; $i<='10'; $i++)
{
    $résultat= $nombre * $i;
    echo "$nombre  *  $i  =  $résultat <br>";
} 

echo "2 éme methode" . "<br>";

$nombre = '6';
$i = '1';
while ( $i<='10')
{
    $résultat = $nombre * $i;
    echo $nombre . " * " .  $i  . " = " . $résultat . "<br>";
    $i++;
}




 
 
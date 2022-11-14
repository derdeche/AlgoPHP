<h1>Exercice2</h1> 

<p>Soit le tableau suivant:</p><br>
<p>$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");</p><br>
<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays)
grâce à une fonction personnalisée.</p><br>
<p>Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p><br>
<p>Affichage<br>Pays Capitale<br>ALLEMAGNE Berlin<br>FRANCE Paris<br>ITALIE Rome<br>USA Washington</p>

<h2>Résultat</h2>
<!----
<table border=1>
    
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitale</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>

        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>

        </tr>
        <tr>
            <td>Italie</td>
            <td>rome</td>

        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>

        </tr>
    </tbody>
</table>
----> 






<?php



$capitales = [

    "France"=>"Paris",

    "Allemagne"=>"Berlin",

    "USA"=>"Washington",

    "Italie"=>"Rome"

];



 foreach($capitales as $pays => $capitale){

    echo "le pays $pays a pour capitale : $capitale<br>";

 }


echo afficherTableHtml($capitales);

function afficherTableHtml($capitales) {

    $result = "<table border=1>

                <thead>

                    <tr>

                     <th>Pays</th>

                     <th>Capitales</th>

                    </tr>

                </thead>

          <tbody>" ;

foreach ($capitales as $pays => $capitale){

    $result .= "<tr>

                    <td>$pays</td>

                    <td>$capitale</td>

                </tr>";


}


$result .= "</tbody></table>";

return $result;

}

?>


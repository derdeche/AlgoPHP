<h1>Exercice4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale 
(le lien hypertexte devra s’ouvrir dans un nouvel onglet
et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br> https://fr.wikipedia.org/wiki/<br>
Le tableau passé en argument sera le suivant :<br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<h2>Resultat</h2>




<?php

$lien= 

$capitales = [

    "France"=>"Paris",

    "Allemagne"=>"Berlin",

    "USA"=>"Washington",

    "Italie"=>"Rome",

    "Espagne"=>"Madrid",

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

                     <th>Lien Wiki</th>

                    </tr>

                </thead>

          </tbody>" ;

          ksort($capitales);

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


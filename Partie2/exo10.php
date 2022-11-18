<h1>Exercice6</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient 
les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels 
on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».</P>
<p>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</P>

<h3>Résultat</h3>

<?php

$champs = array("Nom","Prénom","Adresse e-mail","Ville","Sexe");



function afficherInput($champs){
    $resultat = "";

    foreach ($champs as $utilisateur){

        $resultat.= "<label for='$utilisateur'><br>$utilisateur</label><br>";
        $resultat.= "<input type='texte' name= $utilisateur<br>";
        
    }

    return $resultat;

}


echo afficherInput($champs);


$intitulé = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");

function AlimenterListeDeroulante($intitulé){

        $result= "" ;

        $result.="<br><option value=formation >Formation</option>";

        $result.="<select name='choix' id='choix'><br>";       
        

        foreach ($intitulé as $genre){
            $result.= "<option value ='$genre'>$genre</option>";
        
        }

            $result .= "<input type='submit' name='submit' value='Valider'/<br>";

        return $result;

}
    echo AlimenterListeDeroulante($intitulé);


   


    

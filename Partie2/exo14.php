<h1>Exercice</h1>

<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends)<br> 
de la classe Voiture et qui a une propriété supplémentaire (autonomie).Instancier une voiture «classique»<br>
et une voiture «électrique»ayant les caractéristiques suivantes:<br>
Peugeot 408: $v1 = new Voiture("Peugeot","408");<br>
BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);<br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante: <br>
echo $v1->getInfos()."<br/>";<br>
echo $ve1->getInfos()."<br/>";<br>

<h2>Résultat</h2>

<?php

class voiture
{
    private string $_marque;
    private string $_modele;
    

    function __construct(string $marque, string $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

class voitureElec extends voiture
{
    private string $_marqueElec;
    private string $_modeleElec;
    private int $_autonomie;
}


























}

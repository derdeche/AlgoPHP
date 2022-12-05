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
    private string $_model;
    

    public function __construct(string $marque, string $model)
    {
        $this->_marque = $marque;
        $this->_model = $model;
    }

    public function getMarque() : string
    {
        return $this->_marque ;
    }

    public function setMarque(string $marque) 
    {
        $this->_marque = $marque;
        return $this;
    }

    public function getModel() : string
    {
        return $this->_model;
    }

    public function setModel(string $model)
   {
    $this->_model = $model;
    return $this;
   }

   public function getinfos()
   {
    return $this->_marque." ".$this->_model;
   }

}


class voiturelec extends voiture
{
    private string $_marque;
    private string $_model;
    private string $_autonomie;


public function __construct(string $marque,string $model,int $autonomie)
{
    $this->_marque = $marque;
    $this->_model = $model;
    $this->_autonimie = $autonomie;
}

public function getMarque() :string
{
    return $this->_marque;
}

public function setMarque($marque)
{
    $this->_marque = $marque;
    return $this;
}

public function getModel() : string
{
    return $this->_model;
}

public function setModel($model)
{
    $this->_model = $model;
    return $this;
}

public function getAutonomie(): string
{
    return $this->_autonomie;
}

public function setAutonomie(string $autonomie)
{
    $this->_autonomie = $autonomie;
    return $this;
}

public function getInfos()
{
    return $this->_marque. $this->_model. $this->_autonomie;

}


}



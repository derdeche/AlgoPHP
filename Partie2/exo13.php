<h1>Exercice13</h2>
<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPortes et vitesseActuelle<br>
ainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.<br>
La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.<br>
v1 ➔"Peugeot","408",5<br>
v2 ➔"Citroën","C4",3 </p>
<p>Coderl’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests  pour  vérifier  la  cohérence  de  la  classe Voiture.<br>
 Vous  devez  afficher  les  tests  et  les éléments suivants:</p>

 <h2>Résultat</h2>

 <?php

 class Voiture{

    private string $_marque;
    private string $_modele;
    private  int $_nbportes;
    private float $_vitesseactuelle;
    private int $_mode;
   


 function __construct(string $marque,string $modele,int $nbportes, float $vitesseActuelle, int $mode){
    $this->_marque = $marque;
    $this->_modele = $modele;
    $this->_nbPortes = $nbportes;
    $this->_vitesseactuelle = $vitesseActuelle;
    $this->_mode = $mode;
    
}

public function getMarque():string{
    return $this->_marque;
}

public function setMarque(string $marque){
    $this->_marque = $marque;
    return $this; 
}

public function getModele():string{
    return $this->_modele;
}

public function setModele(string $modele){
    $this->_modele= $modele;
    return $this;
}

public function getNBPortes():int{
    return $this->_nbportes;
}

public function setNBPortes(int $portes){
    $this->_nbportes=$portes;
    return $this;
}

public function getvitesse():float{
    return $this->_vitesseactuelle;

}

public function setvitesse($vitesseActuelle){
    $this->_vitesseactuelle = $vitesseActuelle;
    return $this."la vitesse est de"." " .$vitesseActuelle."". "km/h";
}


public function __tostring()
{
    return $this->_marque."".$this->_modele; 
}

public function getMode(){
   return $this->_mode;
}

public function setMode($mode){
    $this->_mode = $mode;
    
    return " le vehicule est démarré";
}

        public function verifieStatut(){
        if($this->_mode  == 0){
        echo "le vehicule "." " . $this->_marque. " ".$this->_modele." n'est pas demarré <br>";
        }

        elseif ($this->_mode  = 1)
            echo "le vehicule"." " .$this->_marque. " " .$this->_modele. " est demarré <br>";
        }
   
    }


$voiture1 = new voiture("peugeot","308","5","0","1");
echo $voiture1->verifieStatut(); 
echo $voiture1->setvitesse(0);









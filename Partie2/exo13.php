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

    private $_marque;
    private $_modéle;
    private $_nbPortes;
    private $_vitesseActuelle=0;
    private $_mode;
   
}

 function __construct($marque,$modéle,$nbPortes,$vitesseActuelle){
    $this->_marque = $marque;
    $this->_modéle = $modéle;
    $this->_nbPortes = $nbPortes;
    $this->_vitesseActuelle = 0;
    $this->_mode=true;
    
}

public function getmarque(){
    return $this->_marque;
}

public function setmarque($marque){
    $this->_marque = $marque;
    return $this; 
}

public function getmodéle(){
    return $this->_modéle;
}

public function setmodéle($modéle){
    $this->_modéle=$modéle;
    return $this;
}

public function getnbPortes(){
    return $this->_nbPortes;
}

public function setnbPortes($nbPortes){
    $this->_nbPortes=$nbPortes;
    return $this;
}

public function getvitesseActuelle(){
    return "la vitesse de" .$this->_marque. " ".$this->_modéle. "est de" .$this->vitesseActuelle. "km/h" <br>;

}

public function setvitesseActuelle($vitesse){
    $this->_vitesseActuelle = $vitesse;
    return $this->vitesseActuelle = $vitesse;
}

public function getmode(){
    $this->_mode;
}

public function setmode($mode){
    $this->_mode=$mode;
    return $this;
}

public function demarer(){
    $this->_mode = true;
    echo "le véhicule".$this->_marque. " " .$this->_modéle . "est démarré"<br>;
}

public function stopper(){
    $this->_mode= false;
    echo  "le véhicule". $this->_marque. " " .$this->modéle ."est à l'arrét"<br>;
}

public function acceleration($vitesse)
    if ($this->_vitesseActuelle += $vitesse){
    echo "la vitesse du véhicule".$this->marque. "" .$this->_modéle. "est". $vitesse. "km/h" <br>;
}
    else{
        echo "la vitesse du véhicule".$this->marque. "" .$this->modéle. "est" .$vitesse. "km/h" <br>;
}

public function ralentissement($ralenti)
    if ()














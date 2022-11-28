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
    private $_vitesseActuelle;
    private $_ralentirVitesse;

 }

 function __construct($marque,$modéle,$nbPortes,$vitesseActuelle,$ralentirVitesse){
    $this->_marque = $marque;
    $this->_modéle = $modéle;
    $this->_nbPortes = $nbPortes;
    $this->_vitesseActuelle = $vitesseActuelle;
    $this->_ralentirVitesse = $ralentirVitesse;
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
    return $this->_vitesseActuelle;
}
public function setvitesseActuelle(){
    $this->_vitesseActuelle=$vitesseActuelle;
    return $this;
}
public function getralentirVitesse(){
    return $this->_ralentirVitesse;
}
public function setralentirVitesse(){
    $this->_ralentirVitesse=$ralentirVitesse;
    return $this;
}



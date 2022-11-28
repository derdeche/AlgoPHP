
<h1>Exercice15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</P><br>
<p>Exemple: <br>
Michel DUPONT a … ans<br>
Alice DUCHEMIN a … ans<br></P>

<h2>Résultat</h2>

<?php
class Personne {
    private $_nom;
    private $_prénom;
    private $_Anniversaire;
    

    public function __construct($nom,$prénom,$Anniversaire){

        $this->_nom= $nom;       
    
        $this->_prénom=$prénom;   
    
        $this->_Anniversaire=new DateTime($Anniversaire);
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrénom(){
        return $this->_prénom;
    }
    
    public function Age(){
        $today= new DateTime();
        $Anniversaire = ($this->_Anniversaire);
        $diff = date_diff($Anniversaire, $today);
        return $diff->format("%y ans %m mois %d jours");
    }

    public function getAnniversaire(){
        return $this->_Anniversaire;

    }

    public function setNom($newName){
        $this->_nom= $newName;
    }

    public function setprénom($newPrénom){
        $this->_prénom= $newPrénom;
    }

    public function setAnniversaire($Anniversaire){
        return $this->$Anniversaire = $Anniversaire;

    }

    public function __tostring(){
        return $this->_prénom." ".  $this->_nom. " a ". $this->age()."<br>";
    
    }

  

}
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

    echo $p1;
    $p1->setNom("DUPONT");
    
    echo $p1;
    $p1->setPrénom("Michel");

    echo $p1;
    $p1->setanniversaire("2022-11-25");

    echo $p2;
    $p2->setNom("DUCHEMIN");

    echo $p2;
    $p2->setPrénom("Alice");

    echo $p2;
    $p2->setanniversaire("1985-01-17");


?>




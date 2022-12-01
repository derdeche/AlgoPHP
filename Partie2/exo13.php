<h1>Exercice13</h2>
    <p>Créer une classe Voiture possédant les propriétés suivantes: marque, modèle, nbPortes et vitesseActuelle<br>
        ainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des accesseurs (get) et mutateurs (set) traditionnels.<br>
        La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.<br>
        v1 ➔"Peugeot","408",5<br>
        v2 ➔"Citroën","C4",3 </p>
    <p>Coderl’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture.<br>
        Vous devez afficher les tests et les éléments suivants:</p>

    <h2>Résultat</h2>

    <?php

    class Voiture
    {

        private string $_marque;
        private string $_modele;
        private  int $_nbPortes;
        private float $_vitesseActuelle;
        private int $_statut;



        function __construct(string $marque, string $modele, int $nbPortes)
        {
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = 0;
            $this->_statut = 0;
        }

        public function getMarque(): string
        {
            return $this->_marque;
        }

        public function setMarque(string $marque)
        {
            $this->_marque = $marque;
            return $this;
        }

        public function getModele(): string
        {
            return $this->_modele;
        }

        public function setModele(string $modele)
        {
            $this->_modele = $modele;
            return $this;
        }

        public function getNBPortes(): int
        {
            return $this->_nbPortes;
        }

        public function setNBPortes(int $portes)
        {
            $this->_nbPortes = $portes;
            return $this;
        }

        public function getvitesse(): float
        {
            return $this->_vitesseActuelle;
            
            
        }

        public function setvitesse($vitesseActuelle)
        {
            $this->_vitesseActuelle = $vitesseActuelle;
            return  $this;
        }


        public function __tostring()
        {
            return $this->_marque . "" . $this->_modele ." ".$this->_nbPortes;
        }

        public function getStatut()
        {
            return $this->_statut;
        }

        public function setStatut($statut)
        {
            $this->_statut = $statut;

            return $this;
        }

        public function verifieStatut()
        {
            if ($this->_statut  == 0) {
                echo "le véhicule " . " " . $this->_marque . " " . $this->_modele ." ".$this->_nbPortes.""."portes". " n'est pas demarré , la vitesse est 0 km/h <br>";
            } 

            elseif ($this->_statut  == 1)
                echo "le véhicule" . " " . $this->_marque . " " . $this->_modele ." ".$this->_nbPortes."portes". " est demarré  <br>";
        }
    

        public function demarrage()
        {
            if($this->_statut ==0)
            {
                $this->_statut ==1;
                echo "le véhicule " . " " . $this->_marque . " " . $this->_modele ." ".$this->_nbPortes." "."portes"." ". "démarre<br>";
            }
            else
            {
                echo " le véhicule est deja demarré<br>";
            }
        }

        public function acceleration($vitesse)
        {
            $this->_vitesseActuelle += $vitesse ;
                echo "le véhicule"." ". $this->_marque." ".$this->_modele. " ". "accélere de". $vitesse  ."km/h<br>";
                echo "la vitesse est de". $this->_vitesseActuelle."km/h<br>";
        }

        public function stopper()
        {
            if($this->_statut==1)
            {
                $this->_statut==0;
                echo "le véhicule est stoppé";
            }
        }
        
    }
    $voiture1 = new voiture("peugeot", "308", "5");
    //$voiture1->verifieStatut(); 
    $voiture1->demarrage(). "<br>";
    $voiture1->acceleration(50);   
    //echo $voiture1->getvitesse() . "<br>";  
    $voiture1->acceleration(90);  
    //echo $voiture1->getvitesse(). "<br>";   
    $voiture1->stopper();


    

    



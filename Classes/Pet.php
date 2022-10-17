<?php
    
    require_once "Classes/Animal.php";
    require_once "Classes/Owner.php";

    class Pet extends Animal{

        public $nom;
        public $age;
        public $proprietaire;

        public function __construct($animal, $nom, $anniversaire, $proprietaire){
            Animal::setAnimal($animal);
            $this->nom = $nom;
            $this->setAge($anniversaire);
            $this->proprietaire = $proprietaire;
            
        }

        public function setNom($nom){
            $this->nom = $nom; 
        }
 
         public function getNom(){
             return $this->nom;
        }

        public function setAnniversaire($anniversaire){
           $this->anniversaire = $anniversaire; 
        }

        public function getAnniversaire(){
            return $this->anniversaire;
        }

        public function setAge($anniversaire){
            $anniversaire->format("d-m-Y");
            $yearNow = new DateTime();
            $age = $anniversaire->diff($yearNow);
            $this->age = $age->y;
        }
 
         public function getAge(){
             return $this->age;
        }

        public function __toString(){
            $string = Animal::getAnimal();
            $string = $string . " du nom de " . $this->nom . " appertenant à " . $this->proprietaire .  ".";
            return $string;
        }


    }

    $pet1 = new Pet("Chien", "Chouwan", new DateTime("10-10-2017"), $owner1);
    $pet2 = new Pet("Chat", "Maya", new DateTime("11-11-2012"), $owner2);
    $pet3 = new Pet("T-rex", "Rex", new DateTime("12-12-2013"), $owner1);
    $pet4 = new Pet("Cheval", "Blackie", new DateTime("18-04-2005"), $owner3);

    
?>


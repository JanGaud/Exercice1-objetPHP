<?php
 
 require_once "Classes\Pet.php";
    
class Owner{

    private $nom;
    private $adresse;
    private $codePostale;
    private $telephone;
    private $email;

    
    public function __construct($nom, $adresse, $codePostale, $telephone, $email){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostale = $codePostale;
        $this->telephone = $telephone;
        $this->email = $email;
    }

    public function setNom($nom){      
        $this->nom = $nom;
    }

    public function __toString(){
        return $this->nom;
    }

    public function setAdresse($adresse){      
        $this->adresse = $adresse;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function setCodePostale($codePostale){      
        $this->codePostale = $codePostale;
    }

    public function getCodePostale(){
        return $this->codePostale;
    }

    public function setTelephone($telephone){      
        $this->telephone = $telephone;
    }

    public function getTelephone(){
        return $this->telephone;
    }

    public function setEmail($email){      
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
}

$owner1 = new Owner("Janis", "5656 st-Wellignton", "H0F0Z9", "5145555555", "JG@gmail.com");
$owner2 = new Owner("Joshua", "80 desgagné" , "H7V7O7" , "4505555555", "Josh@hotmail.com");
$owner3 = new Owner("Anna", "2552 erable" , "H7X7N5" , "4505555555", "Anna@hotmail.com");
?>
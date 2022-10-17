<?php

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
}


?>
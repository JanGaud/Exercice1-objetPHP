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
        
        if(preg_match("/^([a-zA-Z' ]+)$/",$nom)){
            $this->nom = $nom;
        }
        else{
            throw new exception('Le nom est dans un format invalide!');
        }
    }

    public function __toString(){
        return $this->nom;
    }
}


?>
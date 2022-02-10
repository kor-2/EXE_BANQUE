<?php

class Titulaire 
{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateBD;
    private string $_ville;
    private array $_compteBC;

    public function __construct(string $nom , string $prenom, string $dateBD, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateBD = new DateTime($dateBD);
        $this->_ville = $ville;
        $this->_compteBC = [];
    }


    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of _dateBD
     */ 
    public function get_dateBD()
    {
        return $this->_dateBD;
    }

    /**
     * Set the value of _dateBD
     *
     * @return  self
     */ 
    public function set_dateBD($dateBD)
    {
        $this->_dateBD = $dateBD;

        return $this;
    }

    /**
     * Get the value of _ville
     */ 
    public function get_ville()
    {
        return $this->_ville;
    }

    /**
     * Set the value of _ville
     *
     * @return  self
     */ 
    public function set_ville($ville)
    {
        $this->_ville = $ville;

        return $this;
    }

    /**
     * Get the value of _compteBC
     */ 
    public function get_compteBC()
    {
        return $this->_compteBC;
    }
    public function getAge()
    {
        $dateJour = new DateTime();
        $date = $this->get_dateBD();
        $age = $dateJour->diff($date)->format('%y ans ');

        return $age;
    }

    public function __toString()
    {
        return $this->get_nom().' '.$this->get_prenom().' '. $this->getAge().' '.$this->get_ville();
    }
    
    public function ajoutCompteBC($compte){
        array_push($this->_compteBC,$compte);

        return $this;

    }
}


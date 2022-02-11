<?php

class CompteBancaire
{
    private string $_libelle;
    private string $_soldeIni;
    private string $_devise;
    private Titulaire $_titulaire;
    
    public function __construct(string $libelle = "", int $soldeIni = 0, string $devise = "", Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_soldeIni = $soldeIni;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->ajoutCompteBC($this);
    }

    /**
     * Get the value of _libellé
     */ 
    public function get_libelle()
    {
        return $this->_libelle;
    }

    /**
     * Set the value of _libellé
     *
     * @return  self
     */ 
    public function set_libelle($libelle)
    {
        $this->_libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of _soldeIni
     */ 
    public function get_soldeIni()
    {
        return $this->_soldeIni;
    }

    /**
     * Set the value of _soldeIni
     *
     * @return  self
     */ 
    public function set_soldeIni($soldeIni)
    {
        $this->_soldeIni = $soldeIni;

        return $this;
    }

    /**
     * Get the value of _devise
     */ 
    public function get_devise()
    {
        return $this->_devise;
    }

    /**
     * Set the value of _devise
     *
     * @return  self
     */ 
    public function set_devise($devise)
    {
        $this->_devise = $devise;

        return $this;
    }

    /**
     * Get the value of _titulaire
     */ 
    public function get_titulaire()
    {
        return $this->_titulaire;
    }

    /**
     * Set the value of _titulaire
     *
     * @return  self
     */ 
    public function set_titulaire($titulaire)
    {
        $this->_titulaire = $titulaire;

        return $this;
    }
    public function __toString()
    {
        return $this->get_libelle().' '.$this->get_soldeIni().' '.$this->get_devise().' '.$this->get_titulaire();
    }

    public function crediterCompte(int $montant){

        $solde = $this->get_soldeIni() + $montant;
        $this->set_soldeIni($solde);

        return ;
    }
    public function debiterCompte(int $montant){

        $solde = $this->get_soldeIni() - $montant;
        $this->set_soldeIni($solde);

        return ;
    }

    public function virement(int $montant,CompteBancaire $compteCrediter){

        $this->debiterCompte($montant);

        $compteCrediter->crediterCompte($montant);

        return;
    }
}

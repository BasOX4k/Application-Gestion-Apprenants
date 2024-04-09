<?php

class Utilisateur
{
    private $id;
    private $presence;
    private $heure_debut;
    private $code;
    private $heure_fin;
    private $date_cours;
    
    
    


    function __construct($presence, $heure_debut, $code, $heure_fin, $date_cours, $id = null)
    {
        $this->id = $id;
        $this->presence = $presence;
        $this->heure_debut = $heure_debut;
        $this->code = $code;
        $this->heure_fin = $heure_fin;
        $this->date_cours = $date_cours;
        
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of presence
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Set the value of presence
     */
    public function setPresence($presence): self
    {
        $this->presence = $presence;

        return $this;
    }

    /**
     * Get the value of heure_debut
     */
    public function getHeureDebut()
    {
        return $this->heure_debut;
    }

    /**
     * Set the value of heure_debut
     */
    public function setHeureDebut($heure_debut): self
    {
        $this->heure_debut = $heure_debut;

        return $this;
    }

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     */
    public function setCode($code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of heure_fin
     */
    public function getHeureFin()
    {
        return $this->heure_fin;
    }

    /**
     * Set the value of heure_fin
     */
    public function setHeureFin($heure_fin): self
    {
        $this->heure_fin = $heure_fin;

        return $this;
    }

    /**
     * Get the value of date_cours
     */
    public function getDateCours()
    {
        return $this->date_cours;
    }

    /**
     * Set the value of date_cours
     */
    public function setDateCours($date_cours): self
    {
        $this->date_cours = $date_cours;

        return $this;
    }
}

   
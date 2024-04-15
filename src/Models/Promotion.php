<?php

class Promotion
{

    private $id;
    private $nom_promotion;
    private $date_debut;
    private $date_fin;
    private $place;


    function __contruct($nom_promotion, $date_debut, $date_fin, $place, $id = null)
    {

        $this->nom_promotion = $nom_promotion;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->place = $place;
        $this->id = $id;
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
     * Get the value of nom_promotion
     */
    public function getNomPromotion()
    {
        return $this->nom_promotion;
    }

    /**
     * Set the value of nom_promotion
     */
    public function setNomPromotion($nom_promotion): self
    {
        $this->nom_promotion = $nom_promotion;

        return $this;
    }

    /**
     * Get the value of date_debut
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set the value of date_debut
     */
    public function setDateDebut($date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    /**
     * Get the value of date_fin
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set the value of date_fin
     */
    public function setDateFin($date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    /**
     * Get the value of place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set the value of place
     */
    public function setPlace($place): self
    {
        $this->place = $place;

        return $this;
    }
}
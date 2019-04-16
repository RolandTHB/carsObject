<?php
 abstract class Voiture extends Vehicule {
    protected $nbPortes;
    protected $clim;
    protected $siegeChauffant;
    private $allowedMark = ["Audi","Renault"];

    public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant)
    {
        parent::__construct($marque, $model, $prix);
        $this->nbPortes = $nbPortes;
        $this->clim = $clim;
        $this->siegeChauffant = $siegeChauffant;
        new VoitureException($this);
    }

    /**
     * @return mixed
     */
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    /**
     * @param mixed $nbPortes
     */
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }

    /**
     * @return mixed
     */
    public function getClim()
    {
        return $this->clim;
    }

    /**
     * @param mixed $clim
     */
    public function setClim($clim)
    {
        $this->clim = $clim;
    }

    /**
     * @return mixed
     */
    public function getSiegeChauffant()
    {
        return $this->siegeChauffant;
    }

    /**
     * @param mixed $siegeChauffant
     */
    public function setSiegeChauffant($siegeChauffant)
    {
        $this->siegeChauffant = $siegeChauffant;
    }
}
?>
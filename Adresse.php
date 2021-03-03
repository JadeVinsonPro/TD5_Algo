<?php


class Adresse
{
    private $IdAdresse;
    private $DetailAdresse;
    private $CodePos;
    private $Ville;
    private $nbkm;


    function __construct($IdAdresse, $DetailAdresse, $CodePos, $Ville, $nbkm){
        $this->IdAdresse = $IdAdresse;
        $this->DetailAdresse = $DetailAdresse;
        $this->CodePos = $CodePos;
        $this->Ville = $Ville;
        $this->nbkm = $nbkm;

    }

    public function getIdAdresse()
    {
        return $this->IdAdresse;
    }


    public function setIdAdresse($IdAdresse)
    {
        $this->IdAdresse = $IdAdresse;
    }

    public function Distance() /* retourne la distance, en kilomètres, qui sépare le site du client de la société */
    {
        return $this->nbkm;
    }


    public function AfficheDistance()
    {
        print $this->nbkm."km separe le site du client de la societe \n";
    }

}
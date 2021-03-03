<?php


class Grade
{
    private $code;
    private $libelle;
    private $taux;


    public function __construct($code,$libelle,$taux)
    {
        $this->code = $code;
        $this->libelle = $libelle;
        $this->taux = $taux;
    }




    public function TauxHoraire()  /* La méthode TauxHoraire retourne le taux horaire spécifique du grade */
    {
        return $this->taux;
    }


}
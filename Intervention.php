<?php


class Intervention
{

    private $numero;
    private $date;
    private $duree;
    private $tarifkm; /* tarif kilométrique retenu */
    private Employe $technicien; /* employé ayant effectué l'intervention */



    public function __construct($numero,$date,$duree,$tarifkm,$technicien)
    {
        $this->numero = $numero;
        $this->date = $date;
        $this->duree = $duree;
        $this->tarifkm = $tarifkm;
        $this->technicien = $technicien; #cf fiche de Employe
    }


    public function getTarifkm(): float
    {
        return $this->tarifkm;
    }


    public function FraisKm($distance) #calcule les frais kilométriques occasionnés par une intervention, la distance parcourue étant passée en paramètre
    {
        return $this->tarifkm*$distance;

#il faut prendre $nbkm(client) * $tarifkm

    }

    public function FraisMo() #calcule et retourne les frais de main-d'œuvre occasionnés par une intervention.
    {
       $TotalIntervention = $this->technicien->CoutHoraire()*$this->duree;
        return $TotalIntervention;
    }

}
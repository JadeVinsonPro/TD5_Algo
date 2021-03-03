<?php


class Contrat
{
    private int $IdContrat;
    private $date;
    private Client $leclient;
    private Adresse $adresse;
    private float $montantcontrat;
    private array $tabinterventions = array();
    private int $nbintervention;

    public function __construct($IdContrat,$date,$leclient,$adresse,$montantcontrat)
    {
        $this->IdContrat = $IdContrat;
        $this->date = $date;
        $this->leclient = $leclient;
        $this->adresse = $adresse;
        $this->montantcontrat = $montantcontrat;  /* montant payé par le client */
        $this->nbintervention = 0;  /* nombre d'interventions réalisées pour le contrat et présentes dans tabinterventions */

    }

    public function ajouterIntervention($intervention)
    {
        $this->tabinterventions[] = $intervention;
        $this->nbintervention = $this->nbintervention + 1;
    }


    public function Montant() /* La méthode Montant retourne le montant du contrat payé par le client */
    {
        return $this->montantcontrat;

    }

    public function Ecart()  /* La méthode Écart détermine et retourne l’écart entre le montant du contrat et le coût des interventions effectuées sur ce contrat */
    {
        $cumul = 0;
        foreach($this->tabinterventions as $key => $val){
            $cumul = $cumul + $val->FraisKm($this->adresse->Distance()) + $val->FraisMo();

        }

        return $this->montantcontrat - $cumul;

#correspond (Frais KM+Frais MO Pour total de ce qui est paye) - Le montant total.

    }

}
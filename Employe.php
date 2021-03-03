<?php


class Employe
{
    private $numero;
    private $nom;
    private Grade $qualification;
    private $dateembauche;

    public function __construct($numero,$nom,$qualification,$dateembauche)
    {
        $this->numero = $numero;
        $this->nom = $nom;
        $this->qualification = $qualification;
        $this->dateembauche = $dateembauche;
    }


    public function CoutHoraire() /* La méthode CoûtHoraire détermine et retourne le coût horaire de l'employé en fonction de sa qualification et de son ancienneté */
    {
#prendre prix du grade

        $CoutEmploye = $this->qualification->TauxHoraire();
        return $CoutEmploye;
    }



}
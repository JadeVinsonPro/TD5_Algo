<?php


class Client
{
    private int $numero;
    private string $nom;
    private $ListeAdresses = [];


    public function __construct($numero,$nom)
    {
        $this->numero = $numero;
        $this->nom = $nom;

    }


    public function Ajouter_Adresse($Adress){
        $this->ListeAdresses[] = $Adress;
    }

    public function Supprimer_Adresses($IdAdresse){
        $i=0;
        while(	$i<count($this->ListeAdresses) &&
            $this->ListeAdresses[$i]->get_IdAdresse()!=$IdAdresse){
            $i++;
        }
        if($i<count($this->ListeAdresses)){
            for ($j=$i;$j<count($this->ListeAdresses)-1;$j++){
                $this->ListeAdresses[$j]=$this->ListeAdresses[$j+1];
            }
            unset($this->ListeAdresses[count($this->ListeAdresses)-1]);
        }
        else{
            echo "	Suppression Impossible. 
            L'adresse à supprimer n'appartient pas à ce client.";
        }
    }

    public function Modif_Adresses(){
        for($i=0;$i<count($this->ListeAdresses);$i++){
            $reponse=readline("Supprimer l'adresse N° : ".
                $this->ListeAdresses[$i]->get_IdAdresse()." - Oui ou non ?");
            if($reponse=="oui"){
                $this->Supprimer_Adresses($this->ListeAdresses[$i]->get_IdAdresse());
                $i--;
            }
        }
        $reponse=readline("Ajouter une adresse - Oui ou non ?");
        while($reponse=="oui"){
            $IdAdresse=readline("Saisir le numéro");
            $DetailAdresse=readline("Saisir l'adresse");
            $CodePos=readline("Saisir le code postal");
            $Ville=readline("Saisir la ville");
            $Nbkm=readline("Saisir la distance");
            $NouvelleAdresse=new Adresse($IdAdresse,$DetailAdresse,$CodePos,$Ville,$Nbkm);
            $this->Supprimer_Adresse($NouvelleAdresse);
            $reponse=readline("Ajouter une autre adresse - Oui ou non ?");
        }
    }

    public function affiche() {
        print_r($this->ListeAdresses)  . "\n";

    }



}
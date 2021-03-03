<?php

include "Intervention.php";
include "Employe.php";
include "Grade.php";
include "Contrat.php";
include "Client.php";
include "Adresse.php";

$grade1 = new Grade(1,"Premiere annee",10);
$grade2 = new Grade(2,"5 ans",50);

$employe1 = new Employe(1,"Martin",$grade1,"2020-11-23");

$intervention1 = new Intervention(1,"2020-11-01",10,3,$employe1);
$intervention2 = new Intervention(2,"2020-11-05",70,2,$employe1);
$intervention3 = new Intervention(3,"2020-11-10",50,1,$employe1);

$adresse1 = new Adresse(1,"69 rue Turbigo","75009","Paris",5);
$adresse2 = new Adresse(2,"5 rue Arblade","92240","Malakoff",10);

$client1 = new Client(1,"Martin");

$client1->Ajouter_Adresse($adresse1); #on ajoute les adresses au client1
$client1->Ajouter_Adresse($adresse2);
#print_r($client1);



$contrat1 = new Contrat(1,"2020-07-23",$client1,$adresse2,1500);
$contrat1-> ajouterIntervention($intervention1);
$contrat1-> ajouterIntervention($intervention2);
$contrat1-> ajouterIntervention($intervention3);

#print_r($contrat1);
$Ecart = $contrat1->Ecart();
print_r($Ecart);


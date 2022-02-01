<?php
require_once './classes/voiture.class.php';
require_once './classes/electrique.class.php';

//$voiture1 = new Voiture("Rose", "Peugeot", "207", 1500);
//echo $voiture1->couleur;

//$voiture1->marque = "Tesla";
//$voiture1->modele = "Y";
//$voiture1->couleur = "rose";
//$voiture1->masse = 2000;

//echo $voiture1->getCouleur();

//$voiture1->setCouleur("orange");
//echo "<br/>";
//echo $voiture1->getCouleur();

$voitureElectrique = new Electrique ("bleu", "zoe", "supercar", 2000);
var_dump($voitureElectrique);
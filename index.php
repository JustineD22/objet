<?php
require './classes/electrique.class.php';
require './classes/voiture.class.php';
require './classes/testStatique.class.php';

$voiture1 = new Voiture("Orange", "Peugeot", "207", 1500);
echo $voiture1->couleur;

$voitureElectrique = new Electrique("Bleu", "Michel", "SuperCar", 2000);

var_dump($voitureElectrique);
Test::toto();
// $voiture1->marque = "Tesla";
// $voiture1->modele = "Y";
// $voiture1->couleur = "Rose";
// $voiture1->masse = 2000;
echo $voiture1->getMarque();
echo "<br />";
echo $voiture1->getModele();
echo "<br />";
echo $voiture1->getCouleur();
echo "<br />";
echo $voiture1->getMasse();
echo "<br />";
// echo $voiture1->setCouleur();
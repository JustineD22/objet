<?php
require_once './classes/voiture.class.php';

$voiture1 = new Voiture();

$voiture1->marque = "Tesla";
$voiture1->modele = "Y";
$voiture1->couleur = "rose";
$voiture1->masse = 2000;

echo $voiture1->getCouleur();

$voiture1->setCouleur("orange");
echo "<br/>";
echo $voiture1->getCouleur();
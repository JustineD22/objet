<?php
require_once './classes/voiture.class.php';

class Electrique extends Voiture
{
    protected string $typeMoteur = "électrique";
    protected int $chargeMax = 5000;

}
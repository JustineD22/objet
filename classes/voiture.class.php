<?php

abstract class Voiture {
    protected string $marque;
    protected string $modele;
    protected string $couleur;
    protected int  $masse;
    protected int $roues = 4;

    public function _construct(string $couleur, string $marque, string $modele, int $masse) 
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->masse = $masse;
    }

}


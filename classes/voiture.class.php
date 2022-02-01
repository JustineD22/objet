<?php

class Voiture {
    public $marque;
    public $modele;
    public $couleur;
    public $masse;

    public function getMarque(){
        return $this->marque;
    }

    public function setMarque(string $marque) {
        $this->marque = $marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function setModele(string $modele) {
        $this->modele = $modele;
    }


    public function getCouleur(){
        return $this->couleur;
    }

    public function setCouleur(string $couleur) {
        $this->couleur = $couleur;
    }

    public function getMasse(){
        return $this->masse;
    }

    public function setMasse(int $masse) {
        $this->masse = $masse;
    }

}


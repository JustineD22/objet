<?php

abstract class Voiture
{
    
    protected string $marque;
    protected string $modele;
    protected string $couleur;
    protected int $masse;
    protected int $nombreRoues = 4;

    public function __construct(string $couleur, string $marque, string $modele, int $masse)
    {
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->masse = $masse;
    }
    public function getMarque()
    {
        return $this->marque;
    }

    public function setmarque(string $marque)
    {
        $this->marque = $marque;
    }
    public function getModele()
    {
        return $this->modele;
    }
    
    public function setModele(string $modele)
    {
        $this->modele = $modele;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    
    public function setCouleur(string $couleur)
    {
        $this->couleur = $couleur;
    }
    public function getMasse()
    {
        return $this->masse;
    }
    
    public function setMasse(int $masse)
    {
        $this->masse = $masse;
    }
    public function __destruct()
    {
        echo "<h1>Destruction</h1>";
    }
}
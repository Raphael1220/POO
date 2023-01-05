<?php

class Humain
{

    public $taille = 175;
    public $nom;

    private $secret;

    public function __construct(
        string $nomDeFamille
    ){
        echo "Je suis né.e \n";
        echo $this->nom = $nomDeFamille."\n";
    }

    public function __destruct(){
        echo "Je suis mort.e\n";
    }

    public function marcher()
    {
        echo "Je marche \n";
    }

    public function maTaille()
    {
        echo $this->taille += 1;
    }

    public function getSecret()
    {
        return $this->secret;
    }

    public function setSecret($leSecret)
    {
        $this->secret=$leSecret;
    }
}
$marcelline = new Humain('Dupont Marcelline');
//$constance = new Humain('Durant Constance');

//echo 'La taille de Marcelline et de '.$marcelline->taille." cm \n";
//echo 'La taille de Constance et de '.$constance ->taille." cm \n";

//unset($constance);

$marcelline->setSecret('Le secret');
echo $marcelline->getSecret();

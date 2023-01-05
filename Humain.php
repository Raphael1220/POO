<?php

class Humain{

    public $taille = 175;
    public $nom;
}

$marcelline = new Humain();
$constance = new Humain();

echo 'La taille de Marcelline et de '.$marcelline->taille." cm \n";
echo 'La taille de Constance et de '.$constance ->taille." cm \n";

<?php
trait Bipède{
    public function courir(){
        echo 'Je cours';
    }
}
interface Mammifère{
    public function pilosité():string;
}
abstract class Humain implements Mammifère
{
    use Bipède;

    public $taille = 175;
    public $nom;
    private $secret;
    public $force = 1;
    public static $population = 0;

    public function __construct(
        string $nomDeFamille
    ){
        echo "Je suis né.e \n";
        echo $this->nom = $nomDeFamille."\n";
        //echo self::$population+=1;
    }

    public function __destruct(){
        echo "Je suis mort.e\n";
        //echo self::$population-=1;
    }

    public function marcher()
    {
        echo $this->nom." est entrain de marché \n";
    }

    public function maTaille()
    {
        echo ($this->taille += 1)."\n";
    }

    public function getSecret()
    {
        return $this->secret;
    }

    public function setSecret($leSecret)
    {
        $this->secret=$leSecret;
    }

    public function pilosité():string{
        return "J'ai du poil";
    }

}

class Femme extends Humain{
    public function faireEnfant(){
        echo $this->nom.'peut enfanter';
    }

    public function pilosité():string{
        return "J'ai moins de poil";
    }

}

class Homme extends Humain{
    public $force = 2;

}


$marcelline = new Femme('Dupont Marcelline');

//$constance = new Femme('Durant Constance');

$adam = new Homme('Eve Adam');


//echo 'La taille de Marcelline est de '.$marcelline->taille." cm \n";
//echo 'La taille de Constance est de '.$constance ->taille." cm \n";

//unset($constance);

//$marcelline->setSecret('Le secret');
//echo $marcelline->getSecret();

//echo $adam->marcher()."\n";
//echo 'La force de Marcelline est de '.$marcelline->force."\n";
//echo 'La force de Adam est de '.$adam->force."\n";

//echo $marcelline->faireEnfant();
//echo $adam->faireEnfant();

echo $marcelline->courir();

echo $marcelline->pilosité();
echo $adam->pilosité();
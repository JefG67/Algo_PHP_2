<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";</p>



<?php

class Voiture {
    // Attributs privés de la classe Voiture
    private string $marque;
    private string $model;
    

    // Constructeur de la classe Voiture

    public function __construct(string $marque, string $model) {
        $this->marque = $marque;
        $this->model = $model;
    }

    //setter and getter
    public function getMarque() {
        return $this->marque;
    }
    public function setMarque(string $marque){
        $this->marque = $marque;
    }

    public function getModel() {
        return $this ->model; 
    }

    public function setModel(string $model){
        $this->model = $model;
    }

    // Méthode pour obtenir les informations de la voiture

    public function getInfos()
    {
       echo "Nom et modéle du véhicule : " . $this->marque. " " . $this->model ."<br>";
            
    }

}

class VoitureElec extends Voiture{  
    // Attribut supplémentaire spécifique à la classe VoitureElec
        public int $autonomie;

    // Constructeur de la classe VoitureElec
    public function __construct(string $marque, string $model, int $autonomie)
    {   // Appel du constructeur de la classe parente
        parent::__construct( $marque, $model);
        $this->autonomie = $autonomie;

    }


    //setter and getter
    public function getAutonomie() {
        return $this->autonomie;
    }
    public function setAutonomie(int $autonomie){
        $this->autonomie = $autonomie;


}
// Méthode pour obtenir les informations de la voiture électrique
    public function getInfos()
    {
        parent::getInfos();
        echo "Autonomie du véhicule : " . $this->autonomie;
}
}


$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);


echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";




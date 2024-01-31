<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule. <br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",<br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. 
</p>

<h2>Résultat</h2>


<?php

class Voiture{ 
    //attribut forcement en privée
    private string $marque;
    private string $model;
    private int $nbPortes;
    private int $vitesseActuelle;
    private bool $etat;



public function __construct(string $marque, string $model, int $nbPortes) {
    $this->marque = $marque;
    $this->model = $model;
    $this->nbPortes = $nbPortes;
    $this->vitesseActuelle = 0;
    $this->etat = false;
}

private function getMarque() {
    return $this->marque;
}
private function setMarque(string $marque){
    $this->marque = $marque;
}

private function getModel() {
    return $this ->model; 
}

private function setModel(string $model){
    $this->model = $model;
}

private function getNbPortes(){
    return $this->nbPortes;
}

private function setNbPortes(int $nbPortes){
    $this-> nbPortes = $nbPortes;
}

private function getVitesseActuelle(){
    return $this->vitesseActuelle;
}

private function setVitesseActuelle(int $vitesseActuelle){
    $this->vitesseActuelle = $vitesseActuelle;
}

//Méthode demarrer véhicule
public function demarrer(){
    
    if(!$this->etat){
        $this->etat=true;
        echo "La voiture démarre";

    }
    else{
        echo "La voiture est deja démarré";
    }


} 
    
   

//Méthode accelerer véhicule
public function accelerer($vitesse){
    $this->vitesseActuelle = $vitesse + $this->vitesseActuelle;   
    echo $this->vitesseActuelle;
        if(!$this->etat){
            $this->etat=true;
        }


}

//Méthode stopper véhicule
public function stopper(){
    if($this->etat){
        $this->etat = false;
        echo"elle eteint";
    }
    else {
        echo"deja eteint";
    }


}

//Méthode pour ralentir
public function ralentir($vitesse) {
    
    if($this->vitesseActuelle>$vitesse)
    $this->vitesseActuelle = $this->vitesseActuelle - $vitesse ;

    echo "Le vehicule ralentit de $this->vitesseActuelle";


}





}

$v1=new Voiture("opel","805",5);
$v1->demarrer();
$v1->stopper();
$v1->accelerer(50);
$v1->ralentir(30);
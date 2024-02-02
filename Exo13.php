<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule. <br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",<br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. 
</p>

<h2>Résultat</h2>


<?php

class Voiture {
    //attribut forcement en privée
    private string $marque;
    private string $model;
    private int $nbPortes;
    private int $vitesseActuelle;
    private bool $isDemarree;
    

    // constructeur

    public function __construct(string $marque, string $model, int $nbPortes) {
        $this->marque = $marque;
        $this->model = $model;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->isDemarree = false;
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

    public function getNbPortes(){
        return $this->nbPortes;
    }

    public function setNbPortes(int $nbPortes){
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle(){
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle(int $vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }

    //Méthode demarrer véhicule
    public function demarrer(){
        
        if(!$this->isDemarree){
            $this->isDemarree=true;
            echo "La voiture " . $this . " est démarrée<br>";

        }
        else{
            echo "La voiture est deja démarrée";
        }
    } 
        
    

    //Méthode accelerer véhicule
    public function accelerer($vitesse){
        if($this->isDemarree){
                    
            // $this->vitesseActuelle = $vitesse + $this->vitesseActuelle;
            $this->vitesseActuelle += $vitesse; // a += b   <=>   a = a + b   // accumulation
            echo "La voiture " . $this ." accelere de ". $vitesse ." Km/h<br>"."La vitesse de la voiture ". $this ." est de : ". $this->vitesseActuelle. " Km/h<br>";
        }
        else{ 
            
            echo "La voiture " . $this  . " veut accélérer de " . $vitesse."<br>"."Pour accélerer, il faut démarrer la voiture ". $this . "<br>";
        }
    }

    //Méthode stopper véhicule
    public function stopper(){
        if($this->isDemarree){
            $this->isDemarree = false;
            echo"La voiture " . $this ." est stoppé <br>";
        }
        else {
            echo "La voiture est deja stoppé<br>";
        }

    }

    //Méthode pour ralentir
    public function ralentir($vitesse) {
        
        if ($this->vitesseActuelle >= $vitesse) {
            // $this->vitesseActuelle = $this->vitesseActuelle - $vitesse;
            $this->vitesseActuelle -= $vitesse;

            echo "La voiture ".$this ." ralentit de " . $vitesse . "<br>";
        }
        else {
            echo "La voiture ".$this ." veut ralentir de " . $vitesse . ", mais on ne peut pas ralentir si la nouvelle vitesse nous amène à une vitesse négative<br>";

        }

    }
    public function afficherInfos()
    {
        echo "infos véhicule<br>".
                  "**********************<br>". 

                  "Nom et modéle du véhicule : " . $this . "<br>".

                  // opérateur ternaire :   CONDITION ? SIVRAI : SINON
                  "Le véhicule ".$this->marque." est " . ($this->isDemarree ? "démarré" : "éteint") ."<br>".

                 " Nombre de portes : " . $this->nbPortes . "<br>".

                  "Sa vitesse actuelle est de : " .$this->vitesseActuelle . " km/h<br>";
        
    }

    public function afficherVitesse(){
        echo "La vitesse de la voiture " . $this . " est de : " . $this->getVitesseActuelle() . " km/h<br>";
    }



    // magic method toString, moyen de renvoyer les propriété d'un objet par exemple
    // __toString est une méthode magique
    // elle ne doit pas être appelée directement, mais est appelée automatiquement quand PHP en a besoin
    // elle doit renvoyer un string
    // => le string retourné est comment l'objet doit être représenté sous forme de string
    public function __toString()
    {
        return $this->marque . " " . $this->model; // . " est " . $this->isDemarree . "<br>";
    }

}



$v1 = new Voiture("Peugeot", "408",5);

$v2 = new Voiture("citroën","C4",3);


// echo $v1->afficherInfos() . "<br>";

$v1->demarrer();
$v1->accelerer(50);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
$v1->afficherVitesse();
$v2->afficherVitesse();
echo "<br>";
echo "<br>";
echo $v1->afficherInfos() . "<br>";
echo $v2->afficherInfos() . "<br>";
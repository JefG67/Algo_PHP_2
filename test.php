<?php

class Voiture 
{

    // parameters 
    public string $marque;
    public string $modele;
    public int $nbPorte;
    public int $vitesseActuel;
    public string $status;
    

    // constructeur
    public function __construct(string $marque, string $modele, int $nbPorte)
    {
       $this->marque = $marque;
       $this->modele = $modele;
       $this->nbPorte = $nbPorte;
       $this->vitesseActuel = 0;
       $this->status = " a l'arret"; 
    }

    //setter and getter
    public function getMarques()
    {
        return $this->marque;
    }
    public function setMarques($newMarque)
    {
        $this->marque = $newMarque;
    }

    public function getmodele()
    {
        return $this->modele;
    }
    public function setmodele($newmodele)
    {
        $this->modele = $newmodele;
    }

    public function getnbPorte()
    {
        return $this->nbPorte;
    }
    public function setnbPorte($newnbPorte)
    {
        $this->nbPorte = $newnbPorte;
    }

    public function getvitesseActuel()
    {
        return $this->vitesseActuel;
    }
    public function setvitesseActuel($newvitesseActuel)
    {
        $this->vitesseActuel = $newvitesseActuel;
    }

    // method
    public function demarrer() {

        if ($this->status == "on") {
            echo "la voiture ".$this->marque." ".$this->modele." est déjà allumée<br>";
        }else{
            $this->status = "on";
            echo "la voiture".$this->marque." ".$this->modele." a démarré<br>";
        }
    }
    
    public function accelerer(int $acceleration){
        $this->vitesseActuel += $acceleration ;
         echo "la voiture ".$this->marque." ".$this->modele." roule a ".$this->vitesseActuel."<br>";
    }
    public function freiner(int $freinage){
        $this->vitesseActuel -= $freinage ;
        echo  "la voiture ".$this->marque." ".$this->modele." roule a ".$this->vitesseActuel."<br>";
    }
    
    public function stopper(){
        if ($this->status == " a l'arret"){
            echo "la voiture ".$this->marque." ".$this->modele." est ".$this->status;
        }else {
            $this->status = " a l'arret";
            $this->vitesseActuel = 0;

            echo "la voiture".$this->marque." ".$this->modele." est ".$this->status."avec une vitesse de ".$this->vitesseActuel."<br>";
        }
    }  
    
    // magic method toString, moyen d'afficher facilement une instance d'un objet
    public function __toString()
    {
        return $this->marque." ".$this->modele." est ".$this->status."<br>" ;
    } 
}

$v1 = new Voiture("Peugeot", "408",5);

$v2 = new Voiture("renault","modus",5);

// <?php
// class VoitureElec extends Voiture{//lie 2 fichier
    
//     public int $autonomie;
    
//     public function __construct(string $marque, string $modele, int $nbPorte, int $autonomie)
//     {
//         parent::__construct($marque, $modele, $nbPorte);
//         $this->autonomie = $autonomie;
//     }
//     public function getautonomie()
//     {
//         return $this->autonomie;
//     }

//     public function setautonomie($autonomie)
//     {
//         $this->autonomie = $autonomie;
    
//     }
//     public function getInfos() {
//         $result = parent::getInfos();
//         $result .="Autonomie : ".$this->autonomie." km<br>";
//         return $result;
//     }
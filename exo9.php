<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
Exemple :
afficherRadio($nomsRadio);

<h2>Résultat</h2>


<?php

$nomsRadio = ["Masculin"=>"","Féminin"=>"","Autre"=>"checked"];

function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $nomRadio=>$check){
       
        echo "<form action=''>";
        echo "<label for='$nomRadio'>$nomRadio</label>";
        echo "<input type='radio' id='$nomRadio' name='choix' value='$nomRadio' $check/>";
    }

}

afficherRadio($nomsRadio);




<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :<br>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.<br>

<h2>Résultat</h2>

<?php

$elements = ["Choix1"=>"","Choix2"=>"checked","Choix3"=>""];

function genererCheckbox($elements){
        foreach ($elements as $element=>$check) {
            echo "<label for='$element'>$element</label>";
            echo "<input type='checkbox' name='$element' id'='element' $check/><br>";

        }

}


genererCheckbox($elements);
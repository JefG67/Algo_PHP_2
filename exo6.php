<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.<br>
Exemple :<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);

<h2>Résultat</h2>


<?php

$elements = ["Monsieur","Madame","Mademoiselle"];


function alimenterListeDeroulante ($elements){
    echo "<select name='civil'>";
        foreach ($elements as $element) {
            echo "<option value='$element'>$element</option>";


        }
       echo "</select>";
    
    
    }
    
    alimenterListeDeroulante($elements);


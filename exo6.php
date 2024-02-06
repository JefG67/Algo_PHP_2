<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.<br>
Exemple :<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);

<h2>Résultat</h2>


<?php
//Creation d'un taleau nommé $elements contenant les éléments pour la liste déroulante
$elements = ["Monsieur","Madame","Mademoiselle"];

// la function prend un seul argument, $elements qui est le tableau contenant les éléments pour la liste déroulante.
function alimenterListeDeroulante ($elements){
    //Cette ligne commence à afficher une balise select avec l'attribut name égal à "civil". Cela crée une liste déroulante.
    echo "<select name='civil'>";
    // on utilise foreach pour cree une boucle qui parcoiurt chaque element du tableau
        foreach ($elements as $element) {
            echo "<option value='$element'>$element</option>";


        }
       echo "</select>";
    
    
    }
    
    alimenterListeDeroulante($elements);


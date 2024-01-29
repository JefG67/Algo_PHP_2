<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple : <br>
$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);<br>

<h2>Résultat</h2>


<?php

$nomsInput = ["Nom","Prénom","Ville"];

function afficherInput($nomsInput){
    foreach ($nomsInput as $nomInput) {
        echo "<label for= '$nomInput'>$nomInput </label></br>";
        echo "<input type='text' name='$nomInput  id='$nomInput'/></br>";
       
         
    }
    
}
afficherInput($nomsInput);
    
    
    
    // label>Nom:</label>
    // <input name="nom" id="nom" type="text" />
 
    // <label>Votre âge :</label>
    // <input name="age" id="age" type="number" />



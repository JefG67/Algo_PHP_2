<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple : <br>
$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);<br>

<h2>Résultat</h2>


<?php
// Définition d'u tableau contenant les noms des entrés
$nomsInput = ["Nom","Prénom","Ville"];
// On cree une Fonction pour afficher les entrée
function afficherInput($nomsInput){
    //Utilisation du foreach fournit une façon simple de parcourir des tableaux. foreach ne fonctionne que pour les tableaux et les objets
    foreach ($nomsInput as $nomInput) {
        echo "<label for= '$nomInput'>$nomInput </label></br>";
        echo "<input type='text' name='$nomInput  id='$nomInput'/></br>";
       
         
    }
    
}
afficherInput($nomsInput);
    
    
    

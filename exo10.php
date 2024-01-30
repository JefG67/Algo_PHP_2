<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Résultat</h2>


<?php

$elements = ["Nom","Prénom","Email","Ville","Sexe"];
$list = ["Développeur Logiciel","Designer web","Intégrateur","Chef de projet"];

echo "<form>";
function afficherElements($elements){
        foreach($elements as $element) {
            echo"<label for= '$element'>$element <br> </label>";
            echo "<input type='text' name='$element' id='$element'/><br>";
        }

}
afficherElements($elements);

function afficherlist ($list){
    echo"<br><select name='intitulé de formation'>";
        foreach($list as $lists){
            echo "<option value='$lists'>$lists</option>";

        }

}

afficherlist ($list);


echo"</select><br><br><input type='submit'>";

echo"</form>";
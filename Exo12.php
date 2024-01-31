<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br>
Soit le tableau suivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Résultat</h2>


<?php


$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

foreach ($tableauValeurs as $valeur){
    echo "<br>";
    var_dump($valeur); //la fonction var_dump est utilisée pour afficher les informations de la variable actuelle. c'est a dire chaque element de notre tableau.
    }
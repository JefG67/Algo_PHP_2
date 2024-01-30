<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.<br>
Exemple :
formaterDateFr("2018-02-23");</p>

<h2>Résultat</h2>


<?php



function formaterDateFr($datetrad) {
    $date = new DateTime($datetrad);
    $dateenlettre = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE,);
    echo $dateenlettre->format($date);
    
 
}


echo formaterDateFr("2018-02-23");




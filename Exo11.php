<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.<br>
Exemple :
formaterDateFr("2018-02-23");</p>

<h2>Résultat</h2>


<?php



function formaterDateFr($datetrad) {
    $date = new DateTime($datetrad); /*Crée un objet DateTime à partir de la date fournie.*/
    $dateenlettre = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE,); /* Crée un objet IntlDateFormatter configuré pour formater les dates en français, avec le format de date complet et sans format d'heure*/
    echo $dateenlettre->format($date); /*Utilise l'objet IntlDateFormatter pour formater la date en une chaîne lisible en français et l'affiche.*/
    
 
}
// la fonction formaterDateFr prend une date, la convertit en objet DateTime, puis la formate en français à l'aide de la classe IntlDateFormatter, et affiche le résultat.

echo formaterDateFr("2018-02-23");




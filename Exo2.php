<h1>Exercice 2</h1>

<p>Soit le tableau suivant : </br>
$capitales = array </br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"); </br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays </br>
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à </br>
une fonction personnalisée.</br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales); </br>

<h2>Résultat</h2>


<?php

$capitales = [ "France" => " Paris",
                "Allemagne" => "Berlin",
                "USA"=> "Washington",
                "Italie"=>"Rome",

];

foreach ($capitales as $pays => $capitale) {
    echo " Le pays $pays a pour capitale : $capitale";
}

function afficherTableHTML($capitales) {


}

echo afficherTableHTML($capitales);
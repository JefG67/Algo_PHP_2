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
// Tableau contenant les pays et leurs capitales
$capitales = [ 
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA"=> "Washington",
    "Italie"=>"Rome",

];

// Fonction pour afficher le tableau des capitales
function afficherTableHTML($capitales) {
    // fonction ksort Trier le tableau dans l'ordre croissant, selon la clé. (k = key)
    ksort($capitales);  
    $result = "<table border=1>
                <thead>    
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
            <tbody>";



 // on cree une boucle dans le tableau pour récupérer chaque pays et sa capital
foreach ($capitales as $pays => $capitale) {
    $result .= "<tr>
                    <td>" . mb_strtoupper($pays) . "</td>
                    <td>$capitale</td>
                 </tr>";   
}
// Fermeture du tableau 
$result .= "</tbody></table>";

return $result;
}

echo afficherTableHTML($capitales);
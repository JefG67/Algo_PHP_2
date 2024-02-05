<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra <br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un <br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale)
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki <br>
Le tableau passé en argument sera le suivant : <br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
</p>

<h2>Résultat</h2>

<?php

// Tableau contenant les pays et leurs capitales
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];


// Fonction pour afficher le tableau des capitales avec un lien "wiki"
function afficherTableHTML($capitales)
{   // On utilise asort() pour trier le tableau dans l'ordre alphabétique 
    asort($capitales);
    $result = "<table border=1>
                <thead>    
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>
                    </tr>
                </thead>
                <tbody>";

    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>" . mb_strtoupper($pays) . "</td>
                        <td>$capitale</td>
                        <td><a href='http://www.elan-formation.fr/accueil' target='_blank'>lien</a></td>
                </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
}

echo afficherTableHTML($capitales);
?>

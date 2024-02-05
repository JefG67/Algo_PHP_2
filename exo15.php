<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php

$mail = "elan@elen-formation.fr";

if (filter_var($mail, FILTER_VALIDATE_EMAIL)) { //FILTER_VALIDATE_EMAIL permet de validé ou non une adresse e-mail selon des regles définies on l'utilise tjs avec filter_var ()

    // Si l'adresse e-mail est valide==>
    echo "L'adresse " . "$mail" . " est valide.";
} else {
    // Si l'adresse e-mail n'est pas valide==>
    echo "L'adresse n'est pas valide.";
}
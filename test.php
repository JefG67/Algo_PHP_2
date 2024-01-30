<?php

function afficherRadio($valeurs) {
    foreach ($valeurs as $valeur) {
        // Concaténation de l'ID pour le rendre unique pour chaque bouton radio
        $idUnique = 'radio';
        
        echo "<label for='$idUnique'>$valeur</label>";
        echo "<input type='radio' id='$idUnique' name='choix' value='$valeur'/>";
    }
}

$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

// Appel de la fonction avec le tableau de valeurs
afficherRadio($nomsRadio);

?>

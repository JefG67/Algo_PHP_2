<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.</br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<h2>Résultat</h2>

<style>
    .red {
        color:red;
    }

</style>

<?php

$texte="Mon texte en paramètre";

//afficher le résultat de la fontion convertiMajRouge
echo convertirMajRouge($texte);

function convertirMajRouge($texte) {
    $result=mb_strtoupper($texte); //le mb_ en plus du strtoupper ( qui permet de mettre le texte en maj) permet quand a lui de prendre en charge tous les caractere les "é" en plus 
    $result="<p class='red'>$result</p>"; // pour modifier la couleur du texte en appelant la classe CSS plus haut
    return $result; //Renvoie le résultat


}

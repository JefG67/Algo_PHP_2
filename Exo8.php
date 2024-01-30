<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple :<br>
repeterImage($url,4);

<h2>Résultat</h2>


<?php


$url="https://my.mobirise.com/data/userpic/764.jpg";


function repeterImage($url,$imagemax){
    $image=0;
    while($image<$imagemax){
        echo"<img src='$url'/>";
        $image++;
    }

    
}

repeterImage($url,4);



function repetersImage($url,$imagemax){     

        for ( $image=0; $image<$imagemax; $image++){ //boucle for ([initialisation]; [condition]; [expression_finale]) instruction;
            echo "<img src='$url'>";
    }
}

repetersImage($url, 4);





// function repeterImages($url,$imagemax){
       
//         foreach () {
            
//         }
//     }

// repeterImages($url,4)
   

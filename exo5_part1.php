<?php
echo "Exercice 5:". '<br>';

// 1) avec une boucle while: 

function numberToGuess(){
    $x= 348;
    $count=0;
    $numberToGuess=null;
    while ($numberToGuess != $x){
        $numberToGuess=rand(0,1000);
        $count++;
    }
    echo "Le chiffre à trouver était $x; réussi en $count tentatives!";
}
numberToGuess();
   
// 2) avec une boucle for

// function numberToGuess(){
//     $x= 348;
//     $numberToGuess=null;

//     for ($count=0; $numberToGuess !=$x; $count++) {
//         $numberToGuess=rand(0,1000);
//     }
//     echo "Le chiffre à trouver était $x; réussi en $count tentatives!";
// }
// numberToGuess();

?>
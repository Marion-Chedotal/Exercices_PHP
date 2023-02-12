<?php

echo "Exercice 1:". '<br>';
$a= "4.5";
$b= 5.61;
echo "Question a) <br>"."<br>"; 
echo "Le type de ". $a. " est string" . "<br>";
echo "Le type de ". $b . " est un float" ."<br>"."<br>";

echo "Question b) <br>"."<br>"; 

$c= $a + $b;
$d =$a.$b;
echo '$c est égal à '.$c. '</br>'.'$d est égal à '.$d."<br>"."<br>";

echo "Question c) <br>"."<br>"; 

echo "Pour c, il s'agit d'une conversion car les deux types sont différents. Il convertit le type string en int pour pouvoir l'additionner à la variable b. </br>";
echo "Pour d, il s'agit d'une concaténation.<br>"."<br>";

?>
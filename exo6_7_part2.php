<?php

$citizen = array(
    "Famillo" => array(
                'name' => 'Elliot',
                'city' => 'Harlfeur',
                'age' => '7'
                ),
    "Dion" => array(
            'name' => 'Zoé',
            'city' => 'Saint-Jean-De-Luz',
            'age' => '28'
            ),
    "Venton" => array(
            'name' => 'Martine',
            'city' => 'Lyon',
            'age' => '67'
            ),
    "Stone" => array(
            'name' => 'Guy',
            'city' => 'Lille',
            'age' => '45'
             ),
);
var_dump($citizen); 

foreach($citizen as $key=>$value){
    echo $key. "<br />";
    if (is_array($value)){
        foreach($value as $key =>$value){
          echo $key. " : ".$value."<br/>";  
        }
        echo "<br />";
    }
}
    


?>
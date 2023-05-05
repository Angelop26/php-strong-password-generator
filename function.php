<?php

function pass_generator($passlength){
    $pass_element = [];
    $num = ["1","2","3","4","5","6","7","8","9","0"];
    $alphabet_lower = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $alphabet_upper = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $symbol = ["@", "#","*"];
    $password = '';
    for ($i=0; $i < $passlength; $i++) { 
        $pass_element = array_merge($num,$alphabet_lower,$alphabet_upper,$symbol);
        $element = rand(0, count($pass_element));
        $password .= $pass_element[$element];
    }
    return $password;
}
<?php

function pass_generator($passlength){
    $pass_element = [];
    $num = ["1","2","3","4","5","6","7","8","9","0"];
    $alphabet_lower = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $alphabet_upper = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $symbol = ["@", "#","*"];
    $password = '';

    if ($_GET["only_number"] === 'on' && $_GET["only_alphabet"] === 'on') {
        $pass_element = array_merge($num,$alphabet_lower,$alphabet_upper);
    } elseif ($_GET["only_alphabet"] === 'on' && $_GET["only_symbol"] === 'on') {
        $pass_element = array_merge($symbol,$alphabet_lower,$alphabet_upper);
    } elseif ($_GET["only_symbol"] === 'on' && $_GET["only_number"] === 'on') {
        $pass_element = array_merge($num,$symbol);
    } elseif ($_GET["only_alphabet"] === 'on'){
        $pass_element = array_merge($alphabet_lower,$alphabet_upper);        
    } elseif ($_GET["only_number"] === 'on'){
        $pass_element = array_merge($num);
    } elseif ($_GET["only_symbol"] === 'on') {
        $pass_element = array_merge($symbol);
    } else {
        $pass_element = array_merge($num,$alphabet_lower,$alphabet_upper,$symbol);
    }

    if ($passlength < count($pass_element)) {    
        while (strlen($password) < $passlength) { 
            $element = rand(0, count($pass_element));
            session_start();
            $_SESSION['password'] = $password;
            header("Location: password.php");
    
            $_SESSION['yes']= $_GET['yes'];
    
            if ($_SESSION["yes"] === 'nope') {
                if (!str_contains($password,$pass_element[$element])) {
                    $password .= $pass_element[$element];
                }
            } else {
                $password .= $pass_element[$element];
            }
        }
    } else{
        $password = 'dati insufficienti per la creazione della password';
    }
    return $password;
}
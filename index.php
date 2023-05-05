<?php
if (isset($_GET["number"])) {
    $length = $_GET["number"];
    $result = pass_generator($length);
} 
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <h4><?php echo $result ?></h4>
    <form action="index.php" method="GET">
        <label for="user-number"></label>
        <input type="number" id="user-number" name="number" value="<?php echo $length?>">
        <button type="submit">invia</button>
    </form>
</body>
</html>
<?php
include_once __DIR__ .'/function.php';
if (isset($_GET["number"])) {
    $length = $_GET["number"];
    $result = pass_generator($length);
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
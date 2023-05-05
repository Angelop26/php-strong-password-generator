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
        <label for="user-number">quanto lunga vuoi la password?</label>
        <input type="number" id="user-number" name="number" value="<?php echo $length?>">
        <div>
            <p>consenti ripetizione di uno o più caratteri:</p>
            <label for="yes">si</label>
            <input type="radio" name="yes" value="yes" id="yes">
            <label for="nope">no</label>
            <input type="radio" name="yes" value="nope"  id="nope">
        </div>
        <div>
            <label for="only_number"> solo numeri</label>
            <input type="checkbox" name="only_number" id="only_number">
        </div>
        <div>
            <label for="only_alphabet"> solo lettere</label>
            <input type="checkbox" name="only_alphabet" id="only_alphabet">
        </div>
        <div>
            <label for="only_symbol"> solo simboli</label>
            <input type="checkbox" name="only_symbol" id="only_symbol">
        </div>
        <div>
            <button type="submit">invia</button>
        </div>
    </form>
</body>
</html>
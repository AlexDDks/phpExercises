<?php
// Check if data has been submitted via POST
if ($_POST) {
    // Retrieve the number from the 'numero' field sent via POST
    $numero = $_POST["numero"];

    // Start displaying multiplication using 'for' loop
    echo "Ciclo for" . "<br/>";
    for ($i = 1; $i < 11; $i++) {
        $resultado = $numero * $i;
        echo $i . "._ " . $resultado . "<br/>";
    }

    // Start displaying multiplication using 'while' loop
    echo "Ciclo while" . "<br/>";
    $a = 1;
    while ($a < 11) {
        $resultado2 = $numero * $a;
        echo $a . "._ " . $resultado2 . "<br/>";
        $a++;
    }

    // Start displaying multiplication using 'do-while' loop
    echo "Ciclo do" . "<br/>";
    $num = 1;
    do {
        $resultado3 = $num * $numero;
        echo $num . "._ " . $resultado3 . "<br/>";
        $num++;
    } while ($num < 11);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Character set declaration for the document -->
    <meta charset="UTF-8">
    <!-- Make the layout responsive on devices, setting the viewport width to the device's width and initial scale to 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Set the title of the document -->
    <title></title>
</head>

<body>
    <!-- Form to submit the number; data will be sent to "ejercicio11.php" using the POST method -->
    <form action="ejercicio11.php" method="post">
        <!-- Input field to get the number -->
        <label for="numero">Ingresa el número</label>
        <input type="number" name="numero" id="">
        <!-- Submit button -->
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
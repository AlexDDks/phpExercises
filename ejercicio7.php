<?php
// Check if any data has been sent using the POST method
if ($_POST) {
    // Retrieve the value from the 'ValorA' field sent via POST
    $ValorA = $_POST["ValorA"];

    // Retrieve the value from the 'ValorB' field sent via POST
    $ValorB = $_POST["ValorB"];

    // Calculate the sum of the two values and print the result
    echo "El resultado de la suma de los valores es: " . ($ValorC = $ValorA + $ValorB);
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
    <title>Operadores aritméticos</title>
</head>

<body>
    <!-- Start of the form; data will be sent to "ejercicio7.php" using the POST method -->
    <form action="ejercicio7.php" method="post">
        <!-- Label for the input field 'Valor A' -->
        Valor A:
        <!-- Text input field where users can type a value for 'Valor A' -->
        <input type="text" name="ValorA" id="">
        <br />

        <!-- Label for the input field 'Valor B' -->
        Valor B:
        <!-- Text input field where users can type a value for 'Valor B' -->
        <input type="text" name="ValorB" id="">
        <br />

        <!-- Submit button for the form -->
        <input type="submit" value="Calcular">
    </form>
</body>

</html>
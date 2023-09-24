<?php
// Define a function named 'imprimirNombre' which takes a parameter '$nombre'
function imprimirNombre($nombre)
{
    // Print a greeting message using the provided '$nombre' parameter
    echo "Hola " . $nombre;
}

// Check if data has been submitted via POST
if ($_POST) {
    // Retrieve the name from the 'nombre' field sent via POST
    $nombre = $_POST["nombre"];
    // Call the 'imprimirNombre' function and pass the retrieved name to it
    imprimirNombre($nombre);
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
    <title>Document</title>
</head>

<body>
    <!-- Form to submit the name; data will be sent to "ejercicio12.php" using the POST method -->
    <form action="ejercicio12.php" method="post">
        <!-- Input field to get the name -->
        <label for="nombre">Escribe tu nombre: </label>
        <input type="text" name="nombre" id="">
        <!-- Submit button -->
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
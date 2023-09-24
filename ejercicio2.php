<?php
// Check if the form has been submitted using the POST method
if ($_POST) {
    // Retrieve the value from the input field with the name 'txtNombre'
    $nombre = $_POST['txtNombre'];

    // Display a greeting with the provided name
    echo "Hola " . $nombre;
} else {
    // If the form hasn't been submitted, display a prompt for the user
    echo "Hola, escribe tu nombre:";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Ensure proper rendering and touch zooming for all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Create a form that posts to 'ejercicio2.php' -->
    <form action="ejercicio2.php" method="post">
        <!-- Text input for the user to provide their name -->
        <input type="text" name="txtNombre" id="">
        <br />
        <!-- Submit button for the form -->
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
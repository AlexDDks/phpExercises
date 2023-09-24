<?php
// Check if any data has been sent using the POST method
if ($_POST) {
    // Retrieve the value from the 'txtNombre' field sent via POST
    $txtNombre = $_POST["txtNombre"];

    // Retrieve the value from the 'txtApellido' field sent via POST
    $txtApellido = $_POST["txtApellido"];

    // Display a greeting using the provided first name and last name
    echo "Hola " . $txtNombre . " " . $txtApellido;
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
    <!-- Start of the form; data will be sent to "ejercicio4.php" using the POST method -->
    <form action="ejercicio4.php" method="post">
        <!-- Label for the first name input field -->
        Nombre:
        <!-- Text input field where users can type their first name -->
        <input type="text" name="txtNombre" id="">
        <br />

        <!-- Label for the last name input field -->
        Apellido:
        <!-- Text input field where users can type their last name -->
        <input type="text" name="txtApellido" id="">
        <br />
        <!-- Submit button for the form -->
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
// Check if any data has been sent using the POST method
if ($_POST) {
    // Retrieve the value from the 'btn' field sent via POST
    $boton = $_POST["btn"];

    // Use a switch-case structure to check which button was pressed
    switch ($boton) {
            // Case for when the button with value '1' is pressed
        case 1:
            echo "El usuario presionó el botón 1";
            break;

            // Case for when the button with value '2' is pressed
        case 2:
            echo "El usuario presionó el botón 2";
            break;

            // Case for when the button with value '3' is pressed
        case 3:
            echo "El usuario presionó el botón 3";
            break;
    }
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
    <!-- Start of the form; data will be sent to "ejercicio10.php" using the POST method -->
    <form action="ejercicio10.php" method="post">
        <!-- Button with value '1'. When pressed, it will send the value '1' for the 'btn' field -->
        <input type="submit" value="1" name="btn">
        <br />
        <!-- Button with value '2'. When pressed, it will send the value '2' for the 'btn' field -->
        <input type="submit" value="2" name="btn">
        <br />
        <!-- Button with value '3'. When pressed, it will send the value '3' for the 'btn' field -->
        <input type="submit" value="3" name="btn">
        <br />
    </form>
</body>

</html>
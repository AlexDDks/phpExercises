<?php
// Check if data has been submitted via POST
if ($_POST) {
  // Retrieve the numbers from the form fields 'valorA' and 'valorB' sent via POST
  $numeroA = $_POST["valorA"];
  $numeroB = $_POST["valorB"];

  // Generate a random number between $numeroA and $numeroB
  $numeroAleatorio = rand($numeroA, $numeroB);
  // Display the generated random number
  echo $numeroAleatorio;
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
  <!-- Form to submit the two numbers; data will be sent to "ejercicio13.php" using the POST method -->
  <form action="ejercicio13.php" method="post">
    <!-- Input field to get the first number -->
    Ingresa el valor A:
    <input type="number" name="valorA" id="">
    <br />
    <!-- Input field to get the second number -->
    Ingresa el valor B:
    <input type="number" name="valorB" id="">
    <br />
    <!-- Submit button -->
    <input type="submit" value="Enviar">
  </form>
</body>

</html>
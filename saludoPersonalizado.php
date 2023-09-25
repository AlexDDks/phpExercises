<?php
if ($_POST) {
    $firstName = $_POST['txtFirstName'];
    $lastName = $_POST['txtLastName'];
    echo "Hello " . $firstName . " " . $lastName . ", welcome to our page!";
} else {
    echo "Please enter your first and last name:";
}
?>

<form action="" method="post">
    <input type="text" name="txtFirstName" placeholder="First Name">
    <input type="text" name="txtLastName" placeholder="Last Name">
    <input type="submit" value="Submit">
</form>
<?php
if ($_GET) {
    $movie = $_GET['txtMovie'];
    echo "Searching results for: " . $movie;
}
?>

<form action="" method="get">
    <input type="text" name="txtMovie" placeholder="Movie Name">
    <input type="submit" value="Search">
</form>
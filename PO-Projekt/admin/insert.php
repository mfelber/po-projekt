<?php

session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include "menu.php";

echo "<br> <br>";
echo "pridavas"

?>

<form action="insert-country.php" method="post">
    <input type="text" name="country" value="" placeholder="Country">
    <input type="text" name="image" value="" placeholder="url image">
    <input type="submit" name="submit" value="Submit">

</form>

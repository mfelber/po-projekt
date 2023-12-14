<?php

session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

include "menu.php";

use PO\Lib\DB;
$db = new DB("localhost", 3306, "root", "", "po-projekt");


$countries = $db->getCountries();

echo "<br> <br>";
echo "si admin";

echo "<ul>";
foreach ($countries as $country){
    echo "<li>{$country['countryName']} - {$country['imageURL']}
    <a href='update.php?id=".$country['id']."'>UPDATE</a>
    <a href='delete.php?id=".$country['id']."'>DELETE</a>
</li>";

}

?>
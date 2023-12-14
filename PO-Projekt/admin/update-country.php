<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-projekt");

if(isset($_POST['submit'])) {
    $udpate = $db->updateCountry($_POST['id'], $_POST['name'], $_POST['url']);

    if($udpate) {
        header("Location: home.php?status=5");
    } else {
        header("Location: home.php?status=6");
    }
} else {
    header("Location: home.php");
}

?>
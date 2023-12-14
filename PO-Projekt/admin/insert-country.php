<?php

session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-projekt");

if (isset($_POST['submit'])){
    $insert = $db->insertCountry($_POST['country'],$_POST['image']);

    if($insert) {
        header("Location: home.php?status=1");
    } else {
        header("Location: home.php?status=2");
    }

}
else{
    header("Location: home.php");
}


?>
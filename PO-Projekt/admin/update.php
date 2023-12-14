<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}


include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-projekt");

include "menu.php";

$country = $db->getCountry($_GET['id']);
?>

<?php
echo $country[0]['countryName'];

?>

<form action="update-country.php" method="post">
    <input type="text" name="name" value="<?php echo $country[0]['countryName']; ?>" placeholder="Country Name"><br>
    <input type="text" name="url" value="<?php echo $country[0]['imageURL']; ?>" placeholder="URL for Image"><br>
    <input type="hidden" name="id" value="<?php echo $country[0]['id']; ?>">
    <input type="submit" name="submit" value="Aktualizovat">
</form>
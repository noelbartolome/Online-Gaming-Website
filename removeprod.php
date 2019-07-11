<?php
require_once ("setup/setup.php");
//remove product
$prodid = $_GET['prodid'];
$user_id =$_SESSION['user_id'];
$query = "SELECT * FROM `cart` WHERE `prodid` = $prodid && `user_id` = $user_id";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)){
    $query ="DELETE FROM `cart` WHERE `prodid` = '$prodid' && `user_id` = '$user_id'";
    mysql_query($query);
     header("location: cart.php");
}
?>
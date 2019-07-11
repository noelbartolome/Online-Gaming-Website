<?php
require_once ("setup/setup.php");
$query = "SELECT * FROM `cart` WHERE 1";
$result = mysql_query($query,$conn);
$row = mysql_fetch_assoc($result);
$user_id = $row['user_id'];
$prodid = $row['prodid'];
$price = $row['price'];
$quantity = $row['quantity'];
$total_price = $row['total_price'];
?>
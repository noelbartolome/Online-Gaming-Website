<?php
require_once ("setup/setup.php");
$query = "SELECT * FROM `product` WHERE 1";
$result = mysql_query($query,$conn);
$row = mysql_fetch_assoc($result);
$prodid = $row['prodid'];
$price = $row['price'];
$name = $row['name'];
$description = $row['description'];
$default_or_not = $row['default_or_not'];
$file = $row['file'];
?>
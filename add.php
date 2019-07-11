
<?php
require_once ("setup/setup.php");
//add
$prodid = $_GET['prodid'];
$user_id =$_SESSION['user_id'];
$query = "SELECT * FROM `cart` WHERE `prodid` = $prodid && `user_id` = $user_id";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)){
    $quantity = $row['quantity'];
    $price = $row['price'];
    //$total_product_price = $row['total_price'];
    $added_quantity = $quantity + 1 ;
    $query = "UPDATE `cart` SET `quantity` = '$added_quantity' WHERE `prodid` ='$prodid' && `user_id` = '$user_id'";
    mysql_query($query);
    $multiply = $added_quantity * $price ;
    $query = "UPDATE `cart` SET `total_price`= '$multiply' WHERE `prodid` = '$prodid'&& `user_id` = '$user_id'";
    mysql_query($query);
    header("location: cart.php");
}
?>
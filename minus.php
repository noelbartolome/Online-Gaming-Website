<?php
require_once ("setup/setup.php");
//minus
$prodid = $_GET['prodid'];
$user_id =$_SESSION['user_id'];
$query = "SELECT * FROM `cart` WHERE `prodid` = $prodid && `user_id` = $user_id";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)){
    $quantity = $row['quantity'];
    $price = $row['price'];
    //$total_product_price = $row['total_price'];
    $minus_quantity = $quantity - 1;
    if($minus_quantity == 0){
    $query ="DELETE FROM `cart` WHERE `prodid` = '$prodid' && `user_id` = '$user_id'";
    mysql_query($query);
     header("location: cart.php");
    }else{
        
    $query = "UPDATE `cart` SET `quantity` = '$minus_quantity' WHERE `prodid` ='$prodid' && `user_id` = '$user_id'";
    mysql_query($query);
    $multiply = $minus_quantity * $price ;
    $query = "UPDATE `cart` SET `total_price`= '$multiply' WHERE `prodid` = '$prodid'&& `user_id` = '$user_id'";
    mysql_query($query);
    header("location: cart.php");
    }
}
?>
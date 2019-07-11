<?php
require_once ("/setup/setup.php");
echo "<link rel='stylesheet' type='text/css' href='../css/style.css' />";
$user_id = $_SESSION['user_id'];
$prodid = $_GET['prodid'];
    if(isset($_GET['prodid'])){
        $query="SELECT * FROM `cart` WHERE `user_id`=$user_id && `prodid` =$prodid";
        $result = mysql_query($query);
        $numRow= mysql_num_rows($result);
        if($numRow>0){
           echo "
                <script type='text/javascript'>
                alert('Product already added to the cart. Please do check your cart:D');
                window.location='products.php';
                </script>
            ";
        }else{
            $query= "SELECT * FROM `product` WHERE `prodid`=$prodid";
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            $price = $row['price'];
            $quantity=1;
            $query_cart = "INSERT INTO `cart`(`user_id`, `prodid`, `price`,`quantity`,`total_price`) VALUES ('$user_id','$prodid','$price','$quantity','$price')";
            mysql_query($query_cart);
            echo "
            <script type='text/javascript'>
                alert('Product added to cart :D');
                window.location='products.php';
            </script>
            ";  

            }
        
    }
?>
<?php 
require_once ("setup/setup.php");
echo "<link rel='stylesheet' type='text/css' href='css/style.css' />";
    if(isset($_SESSION['userLogin'])){
        if($_SESSION['userlevel'] == '1'){
                   header("Location:admin/auser.php"); 
        }
    }
$user_id = $_SESSION['user_id'];            
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/gif/png" href="img/uplogo.png">
        <title>BING'S SHOP</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
        
        <div id="uppart">
        <a href="index.php"><img src="img/logo.png"></a>
        
        <?php 
            if(isset($_SESSION['userLogin'])){
            echo
            "
                <ul> 
                <li> <a href='logout.php' id='login'>LogOut</a> </li>
                <li> <a href='#'>|</a> </li>
                <li> <a href='cart.php'><img id='cart' src = 'img/carat.png'>$_SESSION[uname]&apos;cart</a>
                </ul>
            ";  
            }
            else{
                echo
                "
                <ul>  
                <li> <a href='SignUp.php' id='signup'>SignUp</a> </li>
                <li> <a href='#'>|</a> </li>
                <li> <a href='login.php' id='login'>Login</a> </li>
                </ul>
                ";
            }
        ?>
            
        </div><!--main head-->

        <div id="Navbar">

            <ul id="Hornav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="products.php">PRODUCTS</a></li>
            <li><a href="AboutUs.php">ABOUT US</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="DugaNaDiv">
            </div>
            <h1>Cart</h1>
            <div id="tablediv">
                <table>
                    <tr>
                        <td id="th">REMOVE PRODUCT</td>
                        <td id="th">PRODUCT NAME</td>
                        <td id="th">PRICE PER PC</td>
                        <td id="th">ADD ONE</td>
                        <td id="th">QUANTITY</td>
                        <td id="th">REMOVE ONE</td>
                        <td id="th">CURRENT PRICE</td>
                    </tr>

                    <?php
                        $query = "SELECT * FROM `cart` WHERE `user_id` = $user_id";
                        $result = mysql_query($query);
                        while($row = mysql_fetch_assoc($result)){
                        $query_product = "SELECT * FROM `product` WHERE `prodid`=$row[prodid]";
                        $result_product = mysql_query($query_product);
                        $row_product = mysql_fetch_assoc($result_product);
                            echo "

                                <tr>
                                    <td id='ahor'><a href='removeprod.php?prodid=$row[prodid]'>[X]</a></td>
                                    <td>$row_product[name]</td>
                                    <td>₱ $row[price]</td>
                                    <td id='ahor2'><a href='add.php?prodid=$row[prodid]'>[+]</a></td>
                                    <td>$row[quantity]</td>
                                    <td id='ahor'><a href='minus.php?prodid=$row[prodid]'>[-]</a></td>
                                    <td>₱ $row[total_price]</td>
                                </tr>";
                        }
                    ?>
                    
                </table>
               <?php 
                    function total_price() {
						$total = 0;
						$user_id =  $_SESSION['user_id'];
						$product = mysql_query("SELECT * FROM `cart` WHERE `user_id` =  '$user_id'")or die(mysql_error());
			
						while($row=mysql_fetch_array($product)){
							$prodid = $row['prodid'];
							$prod_price = mysql_query("SELECT * FROM `cart` WHERE `prodid`='$prodid' && `user_id` = '$user_id'")or die(mysql_error());
								while($p_price=mysql_fetch_array($prod_price)){
									$product_price = array($p_price['total_price']);
									$values = array_sum($product_price);
									$total +=$values;
								}
						}
						echo "₱&nbsp;".$total;
					}
                ?>
                <div id="total_price_holder"><p>Total Price = <?php total_price()?>  </p></div>
                <a id="checkout" href="checkout.php">Checkout</a>
            </div><!--end nung table div-->
        </div>
            
        
    </body>
</html>
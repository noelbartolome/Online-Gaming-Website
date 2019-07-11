<?php 
require_once ("setup/setup.php");
require_once ("load_product_details.php");
echo "<link rel='stylesheet' type='text/css' href='css/style.css' />";
    if(isset($_SESSION['userLogin'])){
        if($_SESSION['userlevel'] == '1'){
                   header("Location:admin/auser.php"); }
    }
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
                <li> <a href='cart.php'><img id='cart' src = 'img/carat.png'>$_SESSION[uname]&apos;cart</a></li>
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
            <h1>Our Products</h1>
            <div id='prodContainer'>
                <?php
                if(isset($_SESSION['userLogin'])){
                        $url = 'add_prod_to_cart.php?prodid=$row[prodid]';
                        $p_login = 'Add to Cart';
                        $query = "SELECT * FROM `product` WHERE `default_or_not`='1'";
                        $result = mysql_query($query);
                        $row = mysql_fetch_assoc($result);
                        while($row=mysql_fetch_assoc($result)){
                        echo "          
                                        <div id='box_ng_prod'>
                                        <div class='product'>
                                        <img src=$row[file]>
                                        <p>$row[name]</p>
                                        <p>$row[description]</p>
                                        <p>₱ $row[price]</p>
                                        <a href='add_prod_to_cart.php?prodid=$row[prodid]'>Add to cart</a>
                                        </div>
                                        </div>

                            ";
                        }
                    }else{
                        $query = "SELECT * FROM `product` WHERE `default_or_not`='1'";
                        $result = mysql_query($query);
                        $row = mysql_fetch_assoc($result);
                        while($row=mysql_fetch_assoc($result)){
                        echo "          
                                        <div id='box_ng_prod'>
                                        <div class='product'>
                                        <img src=$row[file]>
                                        <p>$row[name]</p>
                                        <p>$row[description]</p>
                                        <p>₱ $row[price]</p>
                                        <a href='login.php'>Login or Signup</a>
                                        </div>
                                        </div>

                            ";
                        } 
                    }
                    
                ?>
            </div><!--end nung product container-->
            <h3>More Products</h3>
             <div id='prodContainer'>
                 <?php
                if(isset($_SESSION['userLogin'])){
                        $url = 'add_prod_to_cart.php?prodid=$row[prodid]';
                        $p_login = 'Add to Cart';
                        $query = "SELECT * FROM `product` WHERE `default_or_not`='0'";
                        $result = mysql_query($query);
                        $row = mysql_fetch_assoc($result);
                        while($row=mysql_fetch_assoc($result)){
                        echo "          
                                        <div id='box_ng_prod'>
                                        <div class='product'>
                                        <img src=$row[file]>
                                        <p>$row[name]</p>
                                        <p>$row[description]</p>
                                        <p>₱ $row[price]</p>
                                        <a href='add_prod_to_cart.php?prodid=$row[prodid]'>Add to cart</a>
                                        </div>
                                        </div>

                            ";
                        }
                    }else{
                        $query = "SELECT * FROM `product` WHERE `default_or_not`='0'";
                        $result = mysql_query($query);
                        $row = mysql_fetch_assoc($result);
                        while($row=mysql_fetch_assoc($result)){
                        echo "          
                                        <div id='box_ng_prod'>
                                        <div class='product'>
                                        <img src=$row[file]>
                                        <p>$row[name]</p>
                                        <p>$row[description]</p>
                                        <p>₱ $row[price]</p>
                                        <a href='login.php'>Login or Signup</a>
                                        </div>
                                        </div>

                            ";
                        } 
                    }
                ?>
            </div><!--end nung product container-->
        </div>
            
        
    </body>
</html>
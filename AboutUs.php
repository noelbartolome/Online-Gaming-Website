<?php 
require_once ("setup/setup.php");
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
            <h1>About Us</h1>
            <div id="AboutUsContainer">
                <div>
                    <p>BINGS ONLINE DOTA 2 INGAME ITEM SHOP</p>
                    <p>We sell ingame items for cheap and fair price based on the steam community market</p>
                    <p>We only accept cash on delivery for the moment as of now..</p>
                    <p> Visit us on our social media pages.</p>
                    <p>www.facebook.com/BingOnlineDota2Store</p>
                </div> 
                
                
                  
            </div>
        </div>
            
        
    </body>
</html>
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
        
        
            
        </div><!--main head-->

        <div id="Navbar">

            <ul id="Hornav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="products.php">PRODUCTS</a></li>
            <li><a href="AboutUs.php">ABOUT US</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="DugaNaDiv"></div>
            <div id="usercont">
            
            
            
            <?php 
            if(isset($_SESSION['userLogin'])){
            echo
                "
                
                <p>Your name is $_SESSION[fname] $_SESSION[midname] $_SESSION[lastname] </p>
                <p>Your email is $_SESSION[email]</p>
                <p>Your mobile number is $_SESSION[mobilenum]</p>
                <p>Your complete address is $_SESSION[address] </p>
                
                <p>Expect your order in 2 - 3 working days, please prepare your cash, Thank You! </p>
                
            
            
            
            ";
        
            }
        ?>
            </div>
          </div>
    
            
        
    </body>
</html>
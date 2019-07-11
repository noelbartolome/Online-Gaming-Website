<?php 

require_once ("../setup/setup.php");
echo "<link rel='stylesheet' type='text/css' href='../css/style.css' />";
    if(isset($_SESSION['userLogin'])){
            if($_SESSION['userlevel'] == '0'){
               header("Location:../index.php"); 
            }
    }else{
        header("Location:../login.php");
    }

        if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price'])){

		$name = $_POST['name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
			$query = "INSERT INTO `product`(`name`, `description`, `price`, `default_or_not`) VALUES ('$name','$description',$price ,'0')";

			if(mysql_query($query)){
                echo "<script type='text/javascript'>alert('Product added sucessfully :D');
                window.location='aproduct.php';
                </script>";
			}else{
				echo "may error <br />";
			}
        }
    
    


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/gif/png" href="../img/uplogo.png">
        <title>BING'S SHOP</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
   
    </head>
    <body id="admin">
        
        <div id="uppart">
        <a href="auser.php"><img src="../img/Logo.png"></a>
             <?php 
                    if(isset($_SESSION['userLogin'])){
                    echo
                    "
                        <ul> 
                        <li> <a href='../logout.php' id='login'>LogOut</a> </li>
                        <li> <a href='#'>|</a> </li>
                        <li> <a href='#'>$_SESSION[uname]</a> </li>
                        </ul>
                    ";  
                    }
                    else{
                        echo
                        "
                        <ul>  
                        <li> <a href='../SignUp.php' id='signup'>SignUp</a> </li>
                        <li> <a href='#'>|</a> </li>
                        <li> <a href='../login.php' id='login'>Login</a> </li>
                        </ul>
                        ";
                    }
                ?>
        </div><!--main head-->

        <div id="Navbar">
            <ul id="Hornav">
            <li><a href="auser.php">DELETE USER</a></li>
            <li><a href="aproduct.php">ADD PRODUCT</a></li>
            <li><a href="avproduct.php">VIEW PRODUCTS</a></li>
            
            </ul>
        </div>
        <div id="content">
            <div id="DugaNaDiv">
        
            </div>
            <h1>Admin Add Product Page</h1>
            <div id="form">
                <form method="POST" action="aproduct.php" enctype="multipart/form-data">
                <input type="text" id="name" name="name" placeholder="Product Name" /><br /><br />
                <input type="text" id="description" name="description" placeholder="Product Desc" /><br /><br />
                <input type="text" id="price" name="price" placeholder="Price Php" /><br /><br />
                <input type="submit" id="submit" name="submit" value="Add Product" />
                </form> 
            </div><!--close nung tablediv-->
        </div>     
    </body>
</html>
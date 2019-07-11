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
            <li><a href="aproduct.php">ADD PRODUCTS</a></li>
            <li><a href="avproduct.php">VIEW PRODUCTS</a></li>
            </ul>   
        </div>
        <div id="content">
            <div id="DugaNaDiv">
        
            </div>
            <h1>Admin View Product</h1>
            <div id="tablediv">
                <table>
                    <tr>
                        <td id="th">ID</td>
                        <td id="th">PRODUCT NAME</td>
                        <td id="th">DESCRIPTION</td>
                        <td id="th">PRICE</td>
                        <td id="th">DELETE</td>
                    </tr>

                    <?php
                        $query = "SELECT * FROM `product` WHERE `default_or_not`=0 && `space_count`= 0";
                        $result = mysql_query($query);
                        while($row = mysql_fetch_assoc($result)){
                            echo "<tr>
                                    <td>$row[prodid]</td>
                                    <td>$row[name]</td>
                                    <td>$row[description]</td>
                                    <td id='fixedwidth'>₱&nbsp$row[price]</td>
                                    <td id='ahor'><a href='deleteprod.php?prodid=$row[prodid]'>delete</a></td>
                                </tr>";
                        }
                    ?>
                </table>  
            </div><!--close nung tablediv-->
        </div>
            
        
    </body>
</html>


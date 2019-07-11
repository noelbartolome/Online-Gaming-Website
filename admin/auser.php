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
            <h1>Admin User Edit Page</h1>
            <div id="tablediv">
                <table>
                    <tr>
                        <td id="th">ID</td>
                        <td id="th">FNAME</td>
                        <td id="th">MIDNAME</td>
                        <td id="th">LASTNAME</td>
                        <td id="th">EMAIL</td>
                        <td id="th">UNAME</td>
                        <td id="th">PASSWORD</td>                           
                        <td id="th">MOBILE#</td>
                        <td id="th">ADDRESS</td>
                        <td id="th">DELETE</td>
                    </tr>

                    <?php
                        $query = "SELECT * FROM `user` WHERE `userlevel` = 0";
                        $result = mysql_query($query);
                        while($row = mysql_fetch_assoc($result)){
                            echo "<tr>
                                    <td>$row[user_id]</td>
                                    <td>$row[fname]</td>
                                    <td>$row[midname]</td>
                                    <td>$row[lastname]</td>
                                    <td>$row[email]</td>
                                    <td>$row[uname]</td>
                                    <td>$row[pw]</td>
                                    <td>$row[mobilenum]</td>
                                    <td>$row[address]</td>
                                    <td id='ahor'><a href='deleteuser.php?id=$row[user_id]'>delete</a></td>
                                </tr>";
                        }
                    ?>
                </table>  
            </div><!--close nung tablediv-->
        </div>
            
        
    </body>
</html>
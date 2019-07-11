<?php 
    require_once ("setup/setup.php");
    echo "<link rel='stylesheet' type='text/css' href='css/style.css' />";

    if(isset($_SESSION['userLogin'])){header("Location:index.php");}
        if(isset($_SESSION['userLogin'])){
            if($_SESSION['userlevel'] == '1'){
                       header("Location:admin/auser.php"); }
        }

    if(isset($_POST['uname'])&&isset($_POST['pw'])){

            $uname = $_POST['uname'];
            $pw = $_POST['pw'];

            $query = "SELECT * FROM `user` WHERE `uname` = '$uname' AND `pw` = '$pw'";

            $result = mysql_query($query,$conn);

            $numRows= mysql_num_rows($result);

            if($numRows > 0){

                $row = mysql_fetch_assoc($result);
                $_SESSION['userLogin'] = "yep";
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['midname'] = $row['midname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['uname'] = $row['uname'];
                $_SESSION['mobilenum'] = $row['mobilenum'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['userlevel'] = $row['userlevel'];
                if($row['userlevel'] == '1'){
                    header("Location:admin/auser.php");
                }else{
                    header("Location:index.php");	
                    
                }
            }else{
                echo"
                <script type='text/javascript'>alert('Incorrect Username or Password D:');
                    </script>
                    ";
            }
}












?>
<html>
    <head>
        <link rel="icon" type="image/gif/png" href="img/uplogo.png">
        <title>BING'S SHOP</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script>
        function SignUp(){
            window.location.href='SignUp.php';
        }
        
        </script>
    </head>
    <body>
        <div id="uppart">
        <a href="index.php"><img src="img/logo.png"></a>
        </div><!--main head-->
        <div id="Navbar">

            <ul id="Hornav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">PRODUCTS</a></li>
            <li><a href="#">ABOUT US</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="DugaNaDiv">
        
            </div>
            <div id="form">
                <form method="POST" action="login.php" id="form">
                    <input type="text" id="uname" name="uname" placeholder="UserName" /><br /><br />
                    <input type="password" id="pw" name="pw" placeholder="Password" /><br /><br />
                    <input type="submit" id="submit" value="Login" />
                    <input type="button" value="SignUp"onclick="SignUp()"/>
                </form>
            </div>
        </div>
            
        
    </body>
</html>
<?php 
require_once ("setup/setup.php");
echo "<link rel='stylesheet' type='text/css' href='css/style.css' />";
	if(isset($_SESSION['userLogin'])){header("Location:index.php");}
    if(isset($_SESSION['userLogin'])){
        if($_SESSION['userlevel'] == '1'){
                   header("Location:admin/auser.php"); }
    }
    if(isset($_POST['fname'])&&($_POST['midname'])&&($_POST['lastname'])&&($_POST['email'])&&($_POST['uname'])&&($_POST['pw'])&&($_POST['address'])&&($_POST['mobilenum']))
    {
        $fname=$_POST['fname'];
        $midname=$_POST['midname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $uname=$_POST['uname'];
        $pw=$_POST['pw'];
        $mobilenum=$_POST['mobilenum'];
        $address=$_POST['address'];
        $query = "SELECT * FROM `user` WHERE `uname` = '$uname'";
        $result = mysql_query($query);
        $numRow= mysql_num_rows($result);
        if($numRow>0){
            echo "
                <script type='text/javascript'>
                    alert('Username Already Exist! D:'); 
                </script>"
                ;
        }
        else{
            $query = "SELECT * FROM `user` WHERE `uname` = '$email'";
            $result = mysql_query($query);
            $numRow= mysql_num_rows($result);
            if($numRow>0){
                echo "
                <script type='text/javascript'>
                    alert('Email Already Exist! D:');
                </script>"
                    ;
             }
            else{
                $query = "INSERT INTO `user`(`fname`,`midname`,`lastname`,`email`,`uname`,`pw`,`address`,`mobilenum`,`userlevel`) VALUES ('$fname','$midname','$lastname','$email','$uname','$pw','$address','$mobilenum','0')";
                    if(mysql_query($query)){
                        echo "<script type='text/javascript'>alert('SignUp Successful :D');
                        window.location='login.php';
                        </script>";
			         } 
            }
           
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
        function check_pw_match(){
            var pw = document.getElementById('pw');
            var cpw = document.getElementById('cpw');
            var hit = "66cc66";
            var miss = "#ff6666";
            if(pw.value == cpw.value){
                cpw.style.backgroundColor = hit;
            }else
                {
                    cpw.style.backgroundColor = miss;
                }
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
               <form method="POST" action="SignUp.php">
			        <input type="text" id="fname" name="fname" placeholder="First Name" required = "required"/><br /><br />
                    <input type="text" id="midname" name="midname" placeholder="Middle Name" required ="required"/><br /><br />
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" required="required"/><br /><br />
                    <input type="text" id="email" name="email" placeholder="Email Address" required="required"/><br /><br />
                    <input type="text" id="uname" name="uname" placeholder="UserName" required="required"/><br /><br />
                    <input type="password" id="pw" name="pw" placeholder="Password" required="required"/><br /><br />
                    <input onblur="check_pw_match()" type="password" id="cpw" name="cpw" placeholder="Confirm Password" required="required"/><br /><br />
                    <input type="text" id="address" name="address" placeholder="Address" required="required"/><br /><br />
                    <input type="text" id="mobilenum" name="mobilenum" placeholder="Mobile Number" required="required"/><br /><br />
                    <input type="submit" id="submit" name="submit" value="submit" required="required"/>
               </form>
            </div>
        </div>
            
        
    </body>
</html>
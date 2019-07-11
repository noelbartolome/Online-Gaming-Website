<?php
	require_once("../setup/setup.php");
   
	if(isset($_GET['id'])){
		$id = $_GET['id'];
        $query = "DELETE FROM `user` WHERE `user_id` = $id";
		if(mysql_query($query)){
			echo"
//                <script type='text/javascript'> add sound axe culling blade
//                var audio = new Audio('')
                alert('User Deleted D:');
                </script>
                ";
			header("Location:auser.php");
		}else{
			echo"
            <script type='text/javascript'>alert('error');
                </script>
                ";
		}
	}else{
		 header("Location:../login.php");
	}

?>
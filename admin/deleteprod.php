<?php
	require_once("../setup/setup.php");
   
	if(isset($_GET['prodid'])){
		$prodid = $_GET['prodid'];
        $query = "DELETE FROM `product` WHERE `prodid` = $prodid";
		if(mysql_query($query)){
			echo"
//                <script type='text/javascript'> add sound axe culling blade
//                var audio = new Audio('')
                alert('Product succesfully Deleted D:');
                </script>
                ";
			header("Location:avproduct.php");
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
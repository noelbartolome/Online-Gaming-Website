<?php
	require_once("setup/setup.php");
	session_destroy();
    echo "
        <script type='text/javascript'>
            alert('Logged Out Successfully :D');
            window.location='index.php';
        </script>
        ";

?>
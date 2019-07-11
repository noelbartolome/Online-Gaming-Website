<?php 
	define("DB_HOST", 'localhost');
	define("DB_USER", 'root');
	define("DB_PASSWORD", '');
	define("DB_DATABASE", 'online_dota2_shop');
	$conn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	

	if(!$conn)
		die("ulul".mysql_error());

	mysql_select_db(DB_DATABASE,$conn);

	session_start();
 ?>
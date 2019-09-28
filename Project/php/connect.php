<?php
//Establishing connection to SQL Database

	define('DBHOST', 'localhost');
	define('DBUSER', 'goodcharitygymgg');
	define('DBPASS', '');
	define('DBNAME', 'my_goodcharitygymgg');
	
	$link = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
    ?>
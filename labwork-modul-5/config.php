<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="modul5";
	
	$conn= mysqli_connect($server, $username, $pass, $dbname);
	if (!$conn) {
		die ("Connection failder: ".mysqli_connect_error());
	}	
	//echo "Connected Successfully";
?>
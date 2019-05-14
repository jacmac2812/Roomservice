<?php
// Enter your Host, username, password, database below.
$con = mysqli_connect("sql7.freemysqlhosting.net:3306","sql7287843","2XReVlDc1Z","sql7287843");
//$con = mysqli_connect("rk9-esnord.dk.mysql:3306","rk9_esnord_dk","htx-db","jacob_roomservice_products");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
		else {
			echo "Connected to MySQL succesfully";
		}
?>
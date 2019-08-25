<?php
session_start();
	$connection=mysqli_connect('localhost','root','','quiz');
	//checking the connection
	if(mysqli_connect_errno()){
		die('Database connection failed'.mysqli_connect_errno());

	}
	else{
		echo "connection successful";
	}

?>
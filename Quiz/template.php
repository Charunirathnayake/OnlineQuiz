<?php 
session_start();
if (isset($_SESSION['uname'])) {
	# code...
	$_SESSION['msg'] = "you must log in first to view this page";
	header("location : login.php");

}

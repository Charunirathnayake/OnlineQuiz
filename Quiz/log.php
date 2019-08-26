<?php 
 require'registration.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>logIn</title>
	<link rel="stylesheet" type="text/css" href="log.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="nav">
		<a href="home.php"><i class="fa fa-home" style="font-size:36px"></i></a>
          
	</div>
	<div class="loginbox">
		<img src="Images/avatar.png" class="avatar">
		<h1>Login Here</h1>
		<form action="log.php" method="post">
			<p>Username</p>
			<input type="text" name="uname" placeholder="Enter Username">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Enter Password">
			<input type="submit" name="login" value="Login">
			<a href="#">Lost Your Password?</a><br>
			<a href="signup.php">Don't have an account?</a>
		</form>
	</div>


</body>
</html>
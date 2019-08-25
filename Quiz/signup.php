<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="sign.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="nav">
		<a href="home.php"><i class="fa fa-home" style="font-size:36px"></i></a>
      </div>


<div class="sign">
	<h2 class="head">Sign up Here</h2>
	<form action="signup.php" method="POST">
			<input type="text" name="uname" placeholder="Username" required><br><br>
			<input type="text" name="email" placeholder="E-Mail Address" required><br><br>
			<input type="password" name="password" placeholder="Password" required><br><br>
			<input type="password" name="retypepw" placeholder="Retype the password" required><br><br>
			<input type="submit" value="Submit" name="sign">
			<br><br>
			<p>Already you have an account?<a href="log.php">login</a></p>

	</form>
</div>

</body>
</html>
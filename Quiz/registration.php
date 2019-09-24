 <?php
  	require'connection.php'; 
	$name="";
	$email="";
	$password="";
	$confirmPassword="";
	$errors=array();
	if(!$connection){
		
		 die("sever can not connected".mysqli_error());
	}else{
		$select=mysqli_select_db($connection,'quiz') or die ("Database not conected");
		if(isset($_POST['submit'])){
			$name=mysqli_real_escape_string($connection,$_POST['uname']);
			$email=mysqli_real_escape_string($connection,$_POST['email']);
			$password=mysqli_real_escape_string($connection,$_POST['password']);
			$confirmPassword=mysqli_real_escape_string($connection,$_POST['retypepw']);
	
			if(empty($name)){
				array_push($errors,"User Name is required.");
			}

			if (empty($email)) {
				array_push($errors,"E mail is required");
			}
			if(empty($password)){
				array_push($errors,"Password is required");
			}
			if (empty($confirmPassword)) {
				array_push($errors,"Confirm password is required");
			}
			if (count($errors)==0) {
				$password=md5($password);
				$confirmPassword=md5($confirmPassword);
				$sql="INSERT INTO user(username,email,password,repassword)VALUES('$name','$email','$password','$confirmPassword')";
				mysqli_query($connection,$sql);
				$_SESSION['uname']=$name;
				$_SESSION['success']="Your Registration is successfully!";
				header('location: log.php');
			}
		} 
	}
	
	if (isset($_POST['login'])) {
		$name=mysqli_real_escape_string($connection,$_POST['uname']);
		$password=mysqli_real_escape_string($connection,$_POST['password']);

		if (empty($name)) {
			array_push($errors,"User Name is required");
		}
		if (empty($password)) {
			array_push($errors,"Password is required");
		}
		if (count($errors)==0) {
			$password=md5($password);
			$query="SELECT * FROM user WHERE username='$name' AND password='$password'";
			$result=mysqli_query($connection,$query);
			$num=mysqli_num_rows($result);
			if($num==0){
				$_SESSION['user']=$name;
				$_SESSION['success']="Your Login successfully!";
				header('location: quiztemplate.php');
			}else{
				array_push($errors,"Please enter the correct details");
				header('location: log.php');
			}
		}
	}

	if (isset($_GET['logout'])) {
		$name=mysqli_real_escape_string($connection,$_POST['uname']);
		$_SESSION['uname']=$name;
		session_destroy();
		unset($_SESSION['uname']);
		header('location: home.php');
	}

mysqli_close($connection);
	?>






 
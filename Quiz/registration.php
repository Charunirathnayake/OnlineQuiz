 <?php require'connection.php'; 

$USER="";
$EMAIL="";
$PASS="";
$REPASS="";

$errors=array();

$USER=mysqli_escape_string($connection,$_POST['uname']);
$EMAIL=mysqli_real_escape_string($connection,$_POST['email']);
$PASS=mysqli_real_escape_string($connection,$_POST['password']);
$REPASS=mysqli_real_escape_string($connection,$_POST['retypepw']);

//form validation
 if(empty($USER)){array_push($errors,"Username is required");}
 if(empty($EMAIL)){array_push($errors,"Email is required");}
 if(empty($PASS)){array_push($errors,"password is required");}
 if(empty($PASS!=$REPASS)){array_push($errors,"Password do not required");}

//check db for exixting user with other username

$user_check_query="SELECT * FROM user WHERE uname='$USER' or email='$EMAIL' LIMIT 1";

$results=mysqli_query($connection,$user_check_query);
$user=mysqli_fetch_assoc($results);

if ($user){
	if ($user['uname']===$USER) {
		array_push($errors,"Username already exists");
	}
	if ($user['email']===$EMAIL) {
		array_push($errors,"Email already exists");
	}

}

//no errors,register the users
if (count($errors)==0) {
	# code...
	 $password=md5($password);
	 $query="INSERT INTO user(username,email,password,repassword) VALUES ('$USER','$EMAIL','PASS','REPASS')";
	 mysqli_query($connection,$query);
	 $_SESSION['uname']=$USER;
	 $_SESSION['success']="You are now logged in";
	 header('location:template.php');

}
 ?>








 
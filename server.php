<?php
	session_start();
$username='';
	$db_host = 'localhost'; 
	$db_user = 'root'; 
	$db_pass = 'mayur03'; 
	$db_name = 'registration';
	$errors = array();
// connect to the database

$con=mysqli_connect($db_host, $db_user,$db_pass, $db_name);

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


//if the rgister button is clicked

if(isset($_POST['register']))
{
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password_1=mysqli_real_escape_string($con,$_POST['password_1']);
	$password_2=mysqli_real_escape_string($con,$_POST['password_2']);

	//ensure that form fields are filled properly
	if(empty($username))
	{
		array_push($errors,"Username is required");
	}
		if(empty($email))
	{
		array_push($errors,"Email is required");
	}
		if(empty($password_1))
	{
		array_push($errors,"Password is required");
	}
	if($password_1 != $password_2)
	{	
		array_push($errors , "The two passwords do not match");
	}

	//if there are no errors , save user to database

	if (count($errors)==0)
	{
		$password = md5($password_1);//encrypt password before storing in database(security)
		$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";
	
 
$result=mysqli_query($con,$sql);
if (! $result) { die('Error: ' . mysqli_error($con)); } else{ echo'hi';
//echo "<div style='text-align:center;color: tomato;margin-top: 15px;'>Record Added Successfully</div>"; mysqli_close($con);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');}
}
	}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
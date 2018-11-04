<?php
ini_set('display_errors', 1);
error_reporting(~0);
	session_start();
$db_host = 'localhost'; 
	$db_user = 'root'; 
	$db_pass = 'mayur03'; 
	$db_name = 'blog_details';
	$errors = array();
// connect to the database
$con=mysqli_connect($db_host, $db_user,$db_pass, $db_name);


 
if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//if the submit button is clicked

if(isset($_POST['save']))
{
	$blogtype=mysqli_real_escape_string($con,$_POST['btype']);
	$topic=mysqli_real_escape_string($con,$_POST['topic']);
	$title=mysqli_real_escape_string($con,$_POST['title']);
  
  $textareablog = mysqli_real_escape_string($con,$_POST['textareablog']);
  $exampleInputFile=mysqli_real_escape_string($con,$_POST['exampleInputFile']);
$tag=mysqli_real_escape_string($con,$_POST['tag']);


$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$mobile=mysqli_real_escape_string($con,$_POST['mbn']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$state=mysqli_real_escape_string($con,$_POST['country']);

}
	//ensure that form fields are filled properly
	if(empty($name))
	{
		array_push($errors,"Name is required");
	}
		if(empty($email))
	{
		array_push($errors,"Email is required");
	}
		if(empty($mobile))
	{
		array_push($errors,"Mobile number is required");
	}
	
	if(empty($title))
	{
		array_push($errors,"Title is required");
	}
    
		if(empty($textareablog))
	{
		array_push($errors,"Blog text is required");
	}
  	if(empty($exampleInputFile))
	{
		array_push($errors,"Photo is required");
	}
	
  
   	if(empty($city))
	{
		array_push($errors,"City is required");
	}
    
    	if(empty($tag))
	{
		array_push($errors,"Tag is required");
	}
    	if(empty($topic))
	{
		array_push($errors,"Topic is required");
	}
    
    	if(empty($blogtype))
	{
		array_push($errors,"Blog type is required");
	}
    
   	if(empty($state))
	{
		array_push($errors,"State is required");
	}
	
//if there are no errors , save user to database

	if (count($errors)==0)
	{

		$sql = "INSERT INTO blogs (blogtype, topic, title,blogtext,photo,tags,name,email,mobile,city,state) VALUES ('$blogtype','$topic', '$title','$textareablog','$exampleInputFile','$tag','$name','$email','$mobile','$city','$state')";
	
 
$result=mysqli_query($con,$sql);
if (! $result) { die('Error: ' . mysqli_error($con)); }
echo "<div style='text-align:center;color: tomato;margin-top: 15px;'><h1>Record Added Successfully</h1></div>"; 
mysqli_close($con);
 }
	

?>
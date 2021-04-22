<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pwd =md5($_POST["pwd"]);


$result = $mysqli->query("SELECT email FROM admin WHERE email='$email'");

$rowcount=mysqli_num_rows($result);



if ($rowcount>0) 
{
	echo "<script>alert('Email is already registered. Please try with another email');</script>";
	redirect();
}

if ($rowcount==0)
{
	

if($mysqli->query("INSERT INTO admin (fname,lname, email, password) VALUES('$fname', '$lname','$email', '$pwd')"))
 {
	echo 'Registered susccessfully.';
	echo '<br/>';
	header ("location:index.php");
 }
}

function redirect() 
{

  header("Refresh: 3; url=404.php");
}


?>

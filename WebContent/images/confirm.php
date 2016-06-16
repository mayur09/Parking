<?php

require("header.php");

require("config.php");
$name=$_POST['name'];
$pass=$_POST['pass'];

//echo $name;
//echo $pass;
$sql="SELECT * FROM user";

$result=mysqli_query($con,$sql);

if (!$result)
  	{
  		
  		echo "Here Problem";
  		die('Error: ' . mysqli_error($con));
  		//header("Location:addCollege.php");
  	}

$rows=mysqli_fetch_array($result);
	$uname=$rows['username'];
	$paswd=$rows['password'];


	if($name==$uname && $pass==$paswd)
	{
		session_start();
		$_SESSION['admin']='1';
		header('Location:colleges.php');
	}

	else
	{
		header('Location:admin.php');	
	}

?>
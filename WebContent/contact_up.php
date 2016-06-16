<?php
require 'config.php';



$value=$_POST['value'];
$id=$_POST['pk'];
$col=$_POST['name'];
 	
 	$sql = "UPDATE clg_contact SET {$col} ='{$value}' WHERE CLG_ID = {$id}";

 	$result = mysqli_query($con,$sql);
 	
 	if (!$result)
  	{
  		
  		echo "Here Problem";
  		die('Error: ' . mysqli_error($con));
  		//header("Location:addCollege.php");
  	}
 
  	
 	




?>
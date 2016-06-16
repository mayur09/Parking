<?php
//session_start();

require 'config.php';



$value=$_POST['value'];
$id=$_POST['pk'];
$col=$_POST['name'];
//echo $msg;
/*
$pk=$_POST['pk'];
$name=$_POST['name'];
//echo $b.$c.$a;


 
 
*/
 	
$sql="SELECT dept_name from clg_dept_mstr WHERE "
 	

  
  $sql = "UPDATE clg_dept_mstr SET {$col} ='{$value}' WHERE CLG_ID = {$id} && dept_name='{$dept}'";

 	$result = mysqli_query($con,$sql);
 	
 	if (!$result)
  	{
  		
  		echo "Here Problem";
  		die('Error: ' . mysqli_error($con));
  		//header("Location:addCollege.php");
  	}
 
  	// else{
  	// 	header('HTTP 400 Bad Request', true, 400);
   //       echo "Query Problem!";
  	// }
 
 	

?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="./bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>




<script src="./bootstrap-editable/js/bootstrap-editable.js"></script>




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
 	
 	$sql = "UPDATE clg_mstr SET {$col} ='{$value}' WHERE CLG_ID = {$id}";

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
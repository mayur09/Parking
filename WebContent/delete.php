<?php

$id=$_GET['id'];
require("config.php");
$tbl_name="clg_mstr";



$sql="DELETE FROM `clg_mstr` WHERE `clg_mstr`.`clg_id` = $id LIMIT 1";
$result=mysqli_query($con,$sql);
if(!$result)
    {
    die('Error: ' . mysqli_error($con));
    }
else
{
header("Location:colleges.php");
//echo "deleted";	
	}
?>
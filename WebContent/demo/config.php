<?php

 $host="localhost";
 $username="preragzm_cda";
 $password="7AB?K*h[a6U~";
 $db_name="preragzm_cd";


//$host="localhost";
//$username="root";
//$password="";
//$db_name="gujjucolleges";

$con=mysqli_connect("$host","$username","$password","$db_name");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
?>
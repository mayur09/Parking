<?php
$page_type = "home";
session_start();
	include("header.php");
	require("config.php");






	$name=$_SESSION['name'];
	$aicte=$_SESSION['aicte'];
	$ugc=$_SESSION['ugc'];
	$type=$_SESSION['type'];
	$fees=$_SESSION['fees'];
	$fndyear=$_SESSION['fndyear'];
	$logo=$_SESSION['logo'];




	$tbl_name="clg_mstr";

/*	$sql="SELECT clg_id FROM  $tbl_name";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);

	$sr=$count+1;   */

	$sql="INSERT INTO clg_mstr (clg_name,aicte,ugc,foun_year,clg_type,fees,logo)
	VALUES
	('$name','$aicte','$ugc','$fndyear','$type','$fees','$logo')";

		if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");
  	}

  	
  	//echo $name;


  	$sql="SELECT clg_id FROM $tbl_name WHERE clg_name='$name'";
  	//$sql="SELECT CLG_ID FROM $tbl_name WHERE CLG_NAME=$name";
	$result_id=mysqli_query($con,$sql);

	if (!$result_id)
  	{
  		
  		echo "Here Problem";
  		die('Error: ' . mysqli_error($con));
  		//header("Location:addCollege.php");
  	}

	$result_id_rows=mysqli_fetch_array($result_id);
	$clg_id=$result_id_rows['clg_id'];

	//echo $clg_id;



	$sql="INSERT INTO clg_contact (clg_id) VALUES ('$clg_id	')";

	if (!mysqli_query($con,$sql))
  	{
  		echo "Problem is here";
  		//header("Location:addCollege.php");
  	}

  	$sql="INSERT INTO clg_location_mstr (clg_id) VALUES ('$clg_id')";

	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");
  	}




  	$per_name=$_SESSION['per_name'];
	$per_email=$_SESSION['per_email'];
	$per_phone=$_SESSION['per_phone'];
	$per_mob=$_SESSION['per_mob'];
	$web=$_SESSION['web'];



$tbl_name="clg_contact";
	
	//$clg_id=$result_id_rows['clg_id'];


	$sql="UPDATE $tbl_name SET `CCD_CLG_EMAIL`='$per_email', `CCD_CLG_PHONE`='$per_phone',`CCD_CLG_PERS`='$per_name',`CCD_PERS_MONO`='$per_mob',`CCD_CLG_WEB`='$web' WHERE `CLG_ID`='$clg_id' "; 

	

	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");
  	}

  	else
  		
  	{	$sql="DELETE FROM `clg_mstr` WHERE `CLG_ID` = '$clg_id' LIMIT 1)";

		mysqli_query($con,$sql);

	}


$tbl_name="clg_location_mstr";
	

$col_city=$_SESSION['col_city'];
$col_dis=$_SESSION['col_dis'];
$col_pin=$_SESSION['col_pin'];

$sql="UPDATE $tbl_name SET `LOC_CITY`='$col_city', `LOC_TALUKA`='$col_dis',`LOC_PIN_NO`='$col_pin' WHERE `CLG_ID`='$clg_id' ";
if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");
  	}

else
{

		$sql="DELETE FROM `tbl_name` WHERE `CLG_ID` = '$clg_id' LIMIT 1)";

		mysqli_query($con,$sql);
}



if(isset($_POST['checkbox']))

{
		
	foreach ($_POST['checkbox'] as $key => $value) {
	 	
	 	//echo $value;

	 	//$seat=$_POST['$value'];
	 	$seat=$_POST[$value];
	 	//echo $seat;
	 	$sql="INSERT INTO clg_dept_mstr (clg_id,dept_id,dept_name,dept_no_std)
		VALUES
		('$clg_id','$value','$value','$seat')";

	if(!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");	
	}
	
	}
	
	
}

?>



<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>College Added</h1>

			</div>
			<!--/ .page-header-->
			
		</div>
	</section>	

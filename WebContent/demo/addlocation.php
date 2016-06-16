<?php 


session_start();
//$clg_id=$_SESSION['clg_id'];
if(!isset($_SESSION['admin']))
	{
		header('Location:index.php');
	
	}

$_SESSION['per_name'] = $_POST['per_name'];
$_SESSION['per_email'] = $_POST['per_email'];
$_SESSION['per_phone'] = $_POST['per_phone'];
$_SESSION['per_mob'] = $_POST['per_mob'];
$_SESSION['web'] = $_POST['website'];
 
$page_type = 'AddCollege';

	require("header.php"); // Will include nav.php and inc_styles.php
	//require("config.php");
/*
	$tbl_name="clg_contact";
	
	//$clg_id=$result_id_rows['clg_id'];


	$sql="UPDATE $tbl_name SET `CCD_CLG_EMAIL`='$per_email', `CCD_CLG_PHONE`='$per_phone',`CCD_CLG_PERS`='$per_name',`CCD_PERS_MONO`='$per_mob',`CCD_CLG_WEB`='$web' WHERE `CLG_ID`='$clg_id' "; 

	

	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  		header("Location:addCollege.php");
  	}

  	else
  		unset($_SESSION['clg_id']);*/

?>
<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Add New College - Location</h1>

			</div><!--/ .page-header-->
			
			<div class="six columns clearfix">
			
				<div id="addform">
					<form method="POST" action="adddept.php">
					
					<input required="" type="textarea" name="col_addr" id="col_addr" placeholder="Address"/>					

					<input required="" type="text" name="col_city" id="col_city" placeholder="City"/>
					
					<input required="" type="text" name="col_dis" id="col_dis" placeholder="District"/>

					<input required="" type="text" name="col_pin" id="col_pin" placeholder="Pincode"/>

				
					<button class="button default" type="button" name="back" onclick="window.location='addcontact.php'";>Back</button>		

					<button class="button default" type="submit" id="submit">Next</button>
					</form>
				</div>

			</div>
		</div>

</section>
<?php 
include('footer.php');
?>
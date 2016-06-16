<?php 
session_start();
//$clg_id=$_SESSION['clg_id'];
//$col_addr = $_POST['col_addr'];

if(!isset($_SESSION['admin']))
	{
		header('Location:index.php');
	
	}

if($_POST['col_city']=="")
{
	header('Location:addCollege.php');
}


$_SESSION['col_city'] = $_POST['col_city'];
$_SESSION['col_dis'] = $_POST['col_dis'];
$_SESSION['col_pin'] = $_POST['col_pin'];
 
$page_type = 'home';

	require("header.php"); // Will include nav.php and inc_styles.php
//	require("config.php");

/*	$tbl_name="clg_location_mstr";
	$sql="UPDATE $tbl_name SET `LOC_CITY`='$col_city', `LOC_TALUKA`='$col_dis',`LOC_PIN_NO`='$LOC_PIN_NO' WHERE `CLG_ID`='$clg_id' ";
*/
?>
<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Add New College - Department</h1>

			</div><!--/ .page-header-->
			
			<div class="six columns clearfix">
			
				<div id="addform">
				<form method="POST" action="sucess.php">
				<input type="checkbox" name="checkbox['IT']" value="IT"/>Information Technology   		<input type="number" name="IT"/>
				<input type="checkbox" name="checkbox['ME']" value="ME"/>Mechanical	Engineering			<input type="number" name="ME"/>
				<input type="checkbox" name="checkbox['EE']" value="EE"/>Electrical	Engineering			<input type="number" name="EE"/>
				<input type="checkbox" name="checkbox['EC']" value="EC"/>Electronics and Communication	<input type="number" name="EC"/>
				<input type="checkbox" name="checkbox['CS']" value="CS"/>Computer Science				<input type="number" name="CS"/>
				<input type="checkbox" name="checkbox['CE']" value="CE"/>Civil Engineering				<input type="number" name="CE"/>
				<input type="text" name="special"/>Other

				<button class="button default" type="button" name="back" onclick="window.location='addlocation.php'";>Back</button>		



				<button class="button default" type="submit" id="submit">Done</button>
			</form>
				</div>

			</div>
		</div>

</section>
<?php 
include('footer.php');
?>
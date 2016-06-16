<?php 
session_start();
//$clg_id=$_SESSION['clg_id'];
//$col_addr = $_POST['col_addr'];
$_SESSION['col_city'] = $_POST['col_city'];
$_SESSION['col_dis'] = $_POST['col_dis'];
$_SESSION['col_pin'] = $_POST['col_pin'];
 
$page_type = 'AddCollege';

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
				<h2> Department Details will be here </h2>
				<input type="submit" value="DONE">
			</form>
				</div>

			</div>
		</div>

</section>
<?php 
include('footer.php');
?>
<?php 
 
 $page_type = 'SingleCollege';

	require("header.php"); // Will include nav.php and inc_styles.php
	 $id=$_GET['id'];
	require("config.php");
	
	 $tbl_name="clg_mstr";
	 $sql="SELECT clg_name,aicte,ugc,fees,clg_type,logo FROM $tbl_name WHERE clg_id=$id";
	
	
	$result=mysqli_query($con,$sql);
	 if(!$result)
     {
 	    die('Error: ' . mysqli_error($con));
     }
     else 
    
     {
         $rows=mysqli_fetch_array($result);  
         $name=$rows['clg_name'];
     	 $aicte=$rows['aicte'];
     	 if($aicte==1)
     	 {
     	 	$aicte="Yes";
     	 }
     	 else
     	 	$aicte="No";
     	 

     	 $ugc=$rows['ugc'];
     	 if($ugc==1)
     	 {
     	 	$ugc="Yes";
     	 }
     	 else
     	 	$ugc="No";
     	

     	 $fees=$rows['fees'];
         $type=$rows['clg_type'];
     	 $logo=$rows['logo'];
     }



     $tbl_name="clg_contact";
	 $sql="SELECT ccd_clg_email,ccd_clg_phone,ccd_clg_pers,ccd_pers_mono,ccd_clg_web FROM $tbl_name WHERE clg_id=$id";
	
	
	$result=mysqli_query($con,$sql);
	 if(!$result)
     {
 	    die('Error: ' . mysqli_error($con));
     }
     else 
    
     {
         $rows=mysqli_fetch_array($result);  
         
         $email=$rows['ccd_clg_email'];
     	 
     	 $phone=$rows['ccd_clg_phone'];
     	 $name_prsn=$rows['ccd_clg_pers'];

     	 

     	 $mob=$rows['ccd_pers_mono'];
         $web=$rows['ccd_clg_web'];
     	 
     }



      $tbl_name="clg_location_mstr";
	 $sql="SELECT loc_city,loc_taluka,loc_pin_no FROM $tbl_name WHERE clg_id=$id";
	
	
	$result=mysqli_query($con,$sql);
	 if(!$result)
     {
 	    die('Error: ' . mysqli_error($con));
     }
     else 
    
     {
         $rows=mysqli_fetch_array($result);  
         
         $city=$rows['loc_city'];
     	 
     	 $taluka=$rows['loc_taluka'];
     	 $pin_no=$rows['loc_pin_no'];

     	 

     	  
     }

?>

<head>

	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>




</script>

</head>










<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1><?php echo $name;?></h1>

			</div><!--/ .page-header-->
		
			
		<div id="main" class="sixteen columns">

			<center>

								<h2><img src="images/logos/<?php echo $logo;?>" alt="" ></h2>
								<h2><?//php echo $name;?></h2>
								<h4><?//php echo $type;?></h4>	
							</center>
							<div class="details twelve columns clearfix">
								
								
								<h3>Basic Details</h3> 
								
								<div id="xyz">
								
								
								
								<ul>
									<li>Clg Type :&nbsp; &nbsp;<div style="display: inline;" contentEditable="true"><?php echo $type;?></div></li>
									<li>AICTE: &nbsp;&nbsp;<div style="display: inline;" contentEditable="true"><?php echo $aicte;?> </div></li>
									<li>UGC : &nbsp; &nbsp; <div style="display: inline;" contentEditable="true"><?php echo $ugc;?></div></li>
									<li>Fees: &nbsp;&nbsp;&nbsp;<div style="display: inline;" contentEditable="true"><?php echo $fees;?></div></li>
								</ul>
							</div>
						</div>

							
								
								
							


							<div class="details twelve columns clearfix zin">
								<h3>Contact</h3>
								

			
								<ul>
									<li>Name: &nbsp; &nbsp;<?php echo $name_prsn;?></li>
									<li>Email:&nbsp; &nbsp;<?php echo $email;?></li>
									<li>Phone:&nbsp; &nbsp;<?php echo $phone;?></li>
									<li>Mobile:&nbsp; &nbsp;<?php echo $mob;?></li>
									<li>Website:&nbsp; &nbsp;<?php echo $web;?></li>
								</ul>
							</div>

							<div class="details twelve columns clearfix zin">
								<h3>Address</h3>
								<ul><li>Address</li>
								<li>City:&nbsp; &nbsp;<?php echo $taluka;?></li>
								<li>District:&nbsp; &nbsp;<?php echo $city;?></li>
								<li>Pin:&nbsp; &nbsp;<?php echo $pin_no;?></li></ul>
							</div>

							<div class="details twelve columns clearfix zin">
								<h3>Department</h3>
								<ul><li>Branch1-Seat1</li>
								<li>Branch2-Seat2</li>
								<li>Branch3-Seat3</li>
								<li>Branch4-Seat4</li></ul>
							</div>

		</div>
</section>

<?php 
	include("footer.php");
?>
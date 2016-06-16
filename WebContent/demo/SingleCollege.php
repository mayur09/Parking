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
$(document).ready(function(){
  $(".btn1").click(function(){
  $("#xyz").load("update.php");
  });
  $(".btn2").click(function(){
  $(".abc").show("scale",5000);
  });

  $(".btn3").click(function(){
  $(".abc").hide();
  });

  $(".btn4").click(function(){
  $(".abc,.contact").show("scale",5000);
  });
});




</script>

<style type="text/css">

/*#abc
{
	display: none;
}*/

.abc
{
	background: white;	
	display: none;
	position: absolute;
	z-index: 10;
	box-shadow: 0px 0px 5px 2px black;
}

.zin {
		position:relative;
		z-index: 5;
}
</style>
</head>



<div class="abc">

<section id="content">
    
		<div class="container clearfix">
			
			
			<div class="six columns clearfix">
			
				<div id="addform">
					<form method="POST" action="addcontact.php">
					<input type="file" name="col_logo" id="col_logo"/>
					<input type="text" name="clg_name" id="clg_name"/>
					
					<input type="radio" name="clg_type" id="clg_type" value="Goverment"/>
					<label>Government</label>
					<input type="radio" name="clg_type" id="clg_type" value="Semi Self Finance"/>
					<label>Semi Finanace</label>
					<input type="radio" name="clg_type" id="clg_type" value="Self Finance"/>
					<label>Self Finanace</label></br>

					<label>AICTE:</label>
					<input type="radio" name="aicte" id="aicte" value="1"/><span>Yes</span>
					<input type="radio" name="aicte" id="aicte" value="0"/><span>No</span></br>

					<label>UGC:</label>
					<input type="radio" name="ugc" id="ugc" value="1"/><span>Yes</span>
					<input type="radio" name="ugc" id="ugc" value="0"/><span>No</span>
					<br>

					<label>Foundation Year</label> <input type="date" name="fndyear" id="fndyear"/>

					<label>Fees:</label> <input type="number" name="fees" id="fees"/>


					<button class="button default" type="submit" id="submit">Next</button>
					
					</form>
					<button class="btn3">Cancel</button>
				</div>

			</div>
		</div>

</section>
</div>







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
								<button class="btn2">Edit</button>
								<div id="xyz">
								
								
								
								<ul>
									<li>Clg Type :&nbsp; &nbsp;<?php echo $type;?></li>
									<li>AICTE: &nbsp;&nbsp;<?php echo $aicte;?> </li>
									<li>UGC : &nbsp; &nbsp; <?php echo $ugc;?></li>
									<li>Fees: &nbsp;&nbsp;&nbsp;<?php echo $fees;?></li>
								</ul>
							</div>
						</div>

							
								
								
							


							<div class="details twelve columns clearfix zin">
								<h3>Contact</h3>
								<button class="btn4">Edit</button>

			<div class="contact abc" >
					<div id="addform">
					
					<form method="POST" action="addlocation.php">
					
					<input required="" type="text" name="per_name" id="per_name" placeholder="Person Name"/>
					
					<input required="" type="email" name="per_email" id="per_email" placeholder="Person Email"/>

					<input required="" type="text" name="per_phone" id="per_phone" placeholder="Phone"/>

					<input required="" type="text" name="per_mob" id="per_mob" placeholder="Person Mobile"/>

					<input required="" type="url" name="website" id="website" placeholder="Website URL"/>
					

					<button class="button default" type="button" name="back" onclick="window.location='addcollege.php'";>Back</button>
					
				
					<button class="button default" type="submit" id="submit">Next</button>
					
					</form>
				</div>
			</div>


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
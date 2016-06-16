
<?php 
 
 


 $page_type = 'SingleCollege';

	require("header.php"); // Will include nav.php and inc_styles.php
	 $id=$_GET['id'];
	 $cl_id=$id;	
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


     $tbl_name="clg_dept_mstr";
	 
	 $sql="SELECT dept_name,dept_no_std FROM $tbl_name WHERE clg_id in ('$id')";
	
	
	$result=mysqli_query($con,$sql);
	 if(!$result)
     {
 	    die('Error: ' . mysqli_error($con));
     }
     else 
    { 
    	
    	while($rows=mysqli_fetch_array($result))
    	{
    		$seat[$rows['dept_name']]=$rows['dept_no_std'];
    	}

    	

    }


?>



<script type="text/javascript">


//$.fn.editable.defaults.mode = 'popup';






</script>


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
							<div class="details twelve columns clearfix box">
								
								
								<h3>Basic Details</h3> 

								
								
								
								
								
								<ul>
									<li><span>Clg Type :</span>
	
								<?php echo $type; ?> 
								</li>
									
								<li><span>AICTE: </span>
								
									<?php echo $aicte;?>
								
								</li>
									<li><span>UGC :  </span>

										<?php echo $ugc;?>
									</li>
									<li><span>Fees: </span>

										<?php echo $fees;?>
									</li>
								</ul>
							
						</div>

						<div class="details twelve columns clearfix box">
								<h3>Contact</h3>
							<ul>
									<li><span>Name: </span>
										<?php echo $name_prsn;?>
									</li>
									
									<li><span>Email:</span>
										<?php echo $email;?></a>
									</li>
									
									<li><span>Phone:</span>
										<?php echo $phone;?>
									</li>
									<li><span>Mobile:</span>
										<?php echo $mob;?>
									</li>
									<li><span>Website:</span>
										<?php echo $web;?>
									</li>
								</ul>

						</div>

							<div class="details twelve columns clearfix box">
								<h3>Address</h3>
							<ul>

								<li><span>City:</span>
									<?php echo $taluka;?>
								</li>
								<li><span>District:</span>
									<?php echo $city;?>
								</li>
								<li><span>Pin:</span>
									<?php echo $pin_no;?>
								</li>
							</ul>	
							</div>

							<div class="details twelve columns clearfix box">
								<h3>Departments</h3>
								
								<ul>
								<?php

									foreach ($seat as $key => $value) {
										
									
										echo"<li>";
										echo "<span>".$key."</span>";
										echo $value;
										echo "</li>";
									}

									
								?>

								</ul>
							</div>

		</div>

</section>

<?php
require('footer.php');
?>
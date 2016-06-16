<?php 
session_start();
if($_SESSION['admin']!=1) 
 {
 	header('Location:index.php');
 }


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

<link href="./bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">


<script type="text/javascript">


//$.fn.editable.defaults.mode = 'popup';

$(function(){
    $('#clg_type').editable({
         
         //value:2,

        //name:clg_type,
        source: [
              {value: 'Self Finance', text: 'Self Finance'},
              {value: 'Goverment', text: 'Goverment'},
              {value: 'SemiSelfFinance', text: 'SemiSelfFinance'}

         ],
         success: function(response, newValue) {
         
         if(response.status == 'error') return response.msg;
           
    	
    			}




    });
    
});


$(function(){
    $('#aicte').editable({
         //value:1,
        source: [
              {value: 1, text: 'Yes'},
              {value: 0, text: 'No'}
              
           ],
         success: function(response, newValue) {
         
         if(response.status == 'error') alert(response.msg);
           
    	
    		}
    });

$('#ugc').editable({
         //value:1,
        source: [
              {value: 1, text: 'Yes'},
              {value: 0, text: 'No'}
              
           ],
		
         success: function(response, newValue) {
         
         if(response.status == 'error') alert(response.msg);
           
    	
    		 	}    


    });
$('#clg_logo').editable();

$('#fees').editable();

$('#ccd_clg_pers').editable();

$('#ccd_clg_email').editable();

$('#ccd_pers_mono').editable();

$('#ccd_clg_phone').editable();

$('#ccd_clg_web').editable();

$('#loc_taluka').editable();

$('#loc_city').editable();

$('#loc_pin_no').editable();

$('.dept_no_std').editable();

});





</script>


<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1><?php echo $name;?></h1>

			</div><!--/ .page-header-->
		
			
		<div id="main" class="sixteen columns">

			<center>


				
						<h2><img src="images/logos/<?php echo $logo;?>" alt="" ></h2>

						<a href="#" id="clg_logo" data-type="text" data-pk=64 data-url="/post" data-title="Select type">Edit</a>

								<h2><?//php echo $name;?></h2>
								<h4><?//php echo $type;?></h4>	
							</center>
							<div class="details twelve columns clearfix box">
								
								
								<h3>Basic Details</h3> 

								
								
								
								
								
								<ul>
									<li><span>Clg Type :</span>
	
								<a href="#" id="clg_type" data-type="select" data-pk=<?php echo $id; ?> data-url="up.php" data-title="Select type"><?php echo $type;?></a>

								</li>
									
								<li><span>AICTE: </span>
								
									<a href="#" id="aicte" data-type="select" data-pk=<?php echo $id; ?> data-url="up.php" data-title="Select"><?php echo $aicte;?></a>
								
								</li>
									<li><span>UGC :  </span>

										<a href="#" id="ugc" data-type="select" data-pk=<?php echo $id; ?> data-url="up.php" data-title="Select"><?php echo $ugc;?></a>
									</li>
									<li><span>Fees: </span>

										<a href="#" id="fees" data-type="text" data-pk=<?php echo $id; ?> data-url="up.php" data-title="Enter Fees"><?php echo $fees;?></a>
									</li>
								</ul>
							
						</div>

						<div class="details twelve columns clearfix box">
								<h3>Contact</h3>
							<ul>
									<li><span>Name: </span>
										<a href="#" id="ccd_clg_pers" data-type="text" data-pk=<?php echo $id; ?> data-url="contact_up.php" data-title="Enter Name"><?php echo $name_prsn;?></a>
									</li>
									
									<li><span>Email:</span>
										<a href="#" id="ccd_clg_email" data-type="text" data-pk=<?php echo $id; ?> data-url="contact_up.php" data-title="Enter Email"><?php echo $email;?></a>
									</li>
									
									<li><span>Phone:</span>
										<a href="#" id="ccd_clg_phone" data-type="text" data-pk=<?php echo $id; ?> data-url="contact_up.php" data-title="Enter Phone no"><?php echo $phone;?></a>
									</li>
									<li><span>Mobile:</span>
										<a href="#" id="ccd_pers_mono" data-type="text" data-pk=<?php echo $id; ?> data-url="contact_up.php" data-title="Enter Mobile no"><?php echo $mob;?></a>
									</li>
									<li><span>Website:</span>
										<a href="#" id="ccd_clg_web" data-type="text" data-pk=<?php echo $id; ?> data-url="contact_up.php" data-title="Enter Website"><?php echo $web;?></a>
									</li>
								</ul>

						</div>

							<div class="details twelve columns clearfix box">
								<h3>Address</h3>
							<ul>

								<li><span>City:</span>
									<a href="#" id="loc_taluka" data-type="text" data-pk=<?php echo $id; ?> data-url="location_up.php" data-title="Enter Website"><?php echo $taluka;?></a>
								</li>
								<li><span>District:</span>
									<a href="#" id="loc_city" data-type="text" data-pk=<?php echo $id; ?> data-url="location_up.php" data-title="Enter Website"><?php echo $city;?></a>
								</li>
								<li><span>Pin:</span>
									<a href="#" id="loc_pin_no" data-type="text" data-pk=<?php echo $id; ?> data-url="location_up.php" data-title="Enter Website"><?php echo $pin_no;?></a>
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
										echo '<a href="#" class="dept_no_std" data-type="text" data-pk='.$id.' data-url="dept_up.php" data-title="Enter Seats">'.$value.'</a>';
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
<?php 
 $page_type = 'SingleCollege';

	require("header.php"); // Will include nav.php and inc_styles.php
	$i=$_GET['id'];
	require("config.php");
	
	$tbl_name="clg_mstr";
	$sql="SELECT clg_name,clg_type,logo FROM $tbl_name WHERE clg_id=$i";
	;
	
	$result_name=mysqli_query($con,$sql);
	if(!$result_name)
    {
    die('Error: ' . mysqli_error($con));
    }
    else 
    
    {
        $rows=mysqli_fetch_array($result_name);  
        $name=$rows['clg_name'];
    	$logo=$rows['logo'];
        $type=$rows['clg_type'];
    }

?>


<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1><?php echo $name;?></h1>

			</div><!--/ .page-header-->
		

		<div id="main" class="sixteen columns">

			<center>

								<img src="images/logos/<?php echo $logo;?>" alt="" />
								<h2><?php echo $name; ?></h2>
								<h4><?php echo $type; ?></h4>	
							</center>
							<div class="details twelve columns clearfix">
								<h3>Section 1</h3?>
							</div>

							<div class="details twelve columns clearfix">
								<h3>Section 2</h3?>
							</div>

							<div class="details twelve columns clearfix">
								<h3>Section 3</h3?>
							</div>

							<div class="details twelve columns clearfix">
								<h3>Section 4</h3?>
							</div>

		</div>
</section>

<?php 
	include("footer.php");
?>
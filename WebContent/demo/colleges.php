<?php 

session_start();
if(!isset($_SESSION['admin']))
	{
		header('Location:index.php');
	
	}

$page_type = 'admin';
include('config.php');
include('header.php');
$tbl_name="clg_mstr";
$sql="SELECT clg_id FROM  $tbl_name";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$_SESSION['srn']=$count;	
	if(!$result)
	{
		die('Error: ' . mysqli_error($con));
  	}	
?>
	<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Admin Dashboard</h1>

			</div><!--/ .page-header-->
			
			<section id="main" class="twelve columns">
	
				<ul id="portfolio-filter" class="portfolio-filter clearfix">
					<li><a data-categories="#">All</a></li>
					<li><a data-categories="#">Government</a></li>
					<li><a data-categories="#">Semi-Government</a></li>
					<li><a data-categories="#">Private</a></li>
				</ul><!--/ .portfolio-filter -->	

				<section id="portfolio-items" class="portfolio-items clearfix">


<?php 
	for($i=1;$i<=$count;$i++){
	
	$r=mysqli_fetch_array($result);
	$ida=$r['clg_id'];
	include('college.php');
	
	}
?>
					<!-- <article class="four columns" data-categories="photo logo">

						<div class="preloader">
							<a class="bwWrapper single-image plus-icon" href="images/full/1.jpg" rel="folio">
								<img src="images/logos/adit.jpg" alt="" >
							</a>							
						</div>

						<a class="project-meta" href="portfolio-single-sidebar.html">

							<h6 class="title"></h6>
							<span class="categories"></span>

						</a>					

					</article> .columns
 -->



<?php //while loop ends here ?>

				</section><!--/ #portfolio-items -->
			
			</section><!--/ #main -->
			
			<aside id="sidebar" class="four columns">
			

				<div class="widget widget_categories">

					<h3 class="widget-title">Meta</h3>

					<ul>
						<li> <a href="addcollege.php">Add New College</a></li>
						<li> <a href="#">Profile Settings</a></li>
						<li> <a href="logout.php">Log Out</a> </li>
					</ul>

				</div><!--/ .widget-->
			
			</aside><!--/ #sidebar-->
			
		</div><!--/ .container -->
		

	</section><!-- content ends -->


<?php 
	include('footer.php');
?>

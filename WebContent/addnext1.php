<?php 

require("header.php"); // Will include nav.php and inc_styles.php
require("config.php");


$logo = $_POST['col_logo'];
$name = $_POST['clg_name'];
$type = $_POST['clg_type'];

$aicte = $_POST['aicte'];
$ugc = $_POST['ugc'];

$fees = $_POST['fees'];

$page_type = 'home';

?>
<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Add New College - Contact</h1>

			</div><!--/ .page-header-->
			
			<div class="six columns clearfix">
			
				<div id="addform">
					<form method="POST" action="addnext2.php">
					
					<input type="text" name="per_name" id="per_name" placeholder="Person Name"/>
					
					<input type="email" name="per_email" id="per_email" placeholder="Person Email"/>

					<input type="text" name="per_phone" id="per_phone" placeholder="Phone"/>

					<input type="text" name="per_mob" id="per_mob" placeholder="Person Mobile"/>

					<input type="url" name="website" id="website" placeholder="Website URL"/>
					<input type="submit" name="submit" value="Next"/>
					</form>
				</div>

			</div>
		</div>

</section>
<?php 
include('footer.php');
?>
 <?php 
 session_start();
 if(!isset($_SESSION['admin']))
	{
		header('Location:index.php');
	
	}


 //$page_type = 'AddCollege';

	require("header.php"); // Will include nav.php and inc_styles.php
	require("config.php");
?>
<section id="content">
    
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Add New College Basic</h1>

			</div><!--/ .page-header-->
			
			<div class="six columns clearfix">
			
				<div id="addform">
					<form method="POST" action="addcontact.php" enctype="multipart/form-data">
					<input required="" type="file" name="col_logo" id="col_logo"/>
					<input required="" type="text" name="clg_name" id="clg_name"/>
					
					<input required="" type="radio" name="clg_type" id="clg_type" value="Goverment"/>
					<label>Government</label>
					<input required="" type="radio" name="clg_type" id="clg_type" value="Semi Self Finance"/>
					<label>Semi Finanace</label>
					<input required="" type="radio" name="clg_type" id="clg_type" value="Self Finance"/>
					<label>Self Finanace</label></br>

					<label>AICTE:</label>
					<input required="" type="radio" name="aicte" id="aicte" value="1"/><span>Yes</span>
					<input required="" type="radio" name="aicte" id="aicte" value="0"/><span>No</span></br>

					<label>UGC:</label>
					<input required="" type="radio" name="ugc" id="ugc" value="1"/><span>Yes</span>
					<input required="" type="radio" name="ugc" id="ugc" value="0"/><span>No</span>
					<br>

					<label>Foundation Year</label> <input required="" type="date" name="fndyear" id="fndyear"/>

					<label>Fees:</label> <input required="" 	type="number" name="fees" id="fees"/>


					<button class="button default" type="submit" id="submit">Next</button>
					</form>
				</div>

			</div>
		</div>

</section>
<?php 
include('footer.php');
?>
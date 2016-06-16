<?php

$page_type = "rec";

require("header.php");
//require("config.php");
?>
	
	<section id="content">
	
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Recommandations</h1>

			</div><!--/ .page-header-->

			<div class="sixteen columns">
			</div>
			
			<div class="clear"></div>

			<div class="nine columns recom">

				<h4 class="content-title">Please insert following fields to match your college</h4>

				<form method="post" action="result.php" class="recommend-form">

					<p class="category">
						<label >Category:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input required="" type="radio" name="category" id="category" value="gen_close"/><span>General</span>
						<input required="" type="radio" name="category" id="category" value="obc_close"/><span>OBC</span>
						<input required="" type="radio" name="category" id="category" value="st_close"/><span>ST</span>
						<input required="" type="radio" name="category" id="category" value="sc_close"/><span>SC</span>
					</p>

					

					<p class="recommend-rank">
						<label>Rank:&nbsp;&nbsp;&nbsp;&nbsp;</label>
						
                        <input required="" type="text" name="rank" id="url" placeholder="Enter your rank."/>
					</p>


					<p class="recommend-branch">
						<label>Branch: </label>
						              <input  type="text" name="branch" id="name" placeholder="Enter a city name"/>
						<!-- <input required="" type="text" name="branch" id="email" /> -->
					</p>


					<p class="recommend-city">
						<label for="name">City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input  type="text" name="city" id="name" placeholder="Enter a city name"/>
					</p>

					
					
					<p class="recommend-submit">
						<button class="button default" type="submit" id="submit">Show Result</button>
					</p>

				</form><!--/ .contact-form-->	

			</div><!--/ .columns-->
			
	 
	 </section><!--/ #content-->
    
<?php 
	include('footer.php');
?>
<?php

$page_type = "contact";

require("header.php");
//require("config.php");
?>

<section id="content">
	
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Contact</h1>

			</div><!--/ .page-header-->

			<div class="sixteen columns">
				<div class="google_map"></div>
			</div>
			
			<div class="clear"></div>

			<div class="nine columns">

				<h4 class="content-title">Lets Keep in Touch </h4>

				<form method="post" action="submit.php" class="contact-form">

					<p class="message-form-name">
						<input required="" type="text" name="name" id="name" />
						<label for="name">Your Name: <span class="required">(required)</span></label>
					</p>

					<p class="message-form-email">
						<input required="" type="email" name="email" id="email" />
						<label for="email">E-mail: <span class="required">(required)</span></label>
					</p>

					<!--<p class="message-form-url">
						<input type="url" name="website" id="url" />
						<label for="url">Website:</label>
					</p>-->

					<p class="message-form-message">
						<textarea required="" name="message" id="message"></textarea>	
					</p>
					<p>
							<img src="captcha.php?rand=<?php echo rand();?>">
					</p>
					<p>
							<input required="" type="text" name="vercode"/>
					</p>
					<br>
					<p class="form-submit">
						<button class="button default" type="submit" id="submit">Submit</button>
					</p>

				</form><!--/ .contact-form-->	

			</div><!--/ .columns-->
			
			<div class="three columns">&nbsp;</div>

			<div class="four columns">

				<h4 class="content-title">Main Office</h4>

				<p>
					<b>Address:</b> 12 Street, Los Angeles, CA, 94101<br>
					<b>Phone:</b> +1 800 123 4567<br>
					<b>FAX:</b> +1 800 891 2345<br>
					<b>Email:</b> testmail@sitename.com<br>
				</p>

			</div><!--/ .columns-->

		</div><!--/ .container-->
	 
	 </section><!--/ #content-->
<?php
    require("footer.php");
?>
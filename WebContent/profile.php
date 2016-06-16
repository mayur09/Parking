<?php
$page_type = "home";
session_start();
include"header.php";


?>

<section id="content">
    
	<div class="container clearfix">



		<div class="six columns clearfix">
			
				<div id="addform">
					<form method="POST" action="change_pass.php">
					
					<input required="" type="password" name="old_pass" placeholder="Old Password"/>
					
					<input required="" type="password" name="new_pass" placeholder="New Password"/>

					<input required="" type="password" name="new_pass2" placeholder="Confirm New Password"/>
				
					<button class="button default" type="submit" id="submit">Change Password</button>
				</div>
		</div>
	</div>
</div>

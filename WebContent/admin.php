<?php
$page_type = "admin";
require("header.php");


?>
<section id="content">
	
		<div class="container clearfix">


<div class="container clearfix">

<div class="sixteen columns row"> 

<br>
<br>
<br>
<br>
<br>

</div>

<div class="four columns row"> </div>

<div class="eight columns row">


<form method="post" action="confirm.php">




					 
					<p>
						<label for="name">Username:</label>
						<input required="" type="text" name="name" id="name">
						
					</p>
					<br>
					<br>
					<p>

						<label for="password">Password:</label>
						<input required="" type="password" name="pass" id="pass">
						
					</p>
					<br>
					<br>

					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button class="button default" type="submit" id="submit">Submit</button>
					</p>
</form>	
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php

require"footer.php";
?>
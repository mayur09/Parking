<?php 
session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { 
     echo  '<strong>Incorrect verification code.</strong>'; 
} 
else 
{ 
     // add form data processing code here 
     require("header.php");

     $name=$_POST['name'];
     $email=$_POST['email'];
     $text=$_POST['message'];
     //echo $name;
     //echo $email;
     //echo "<br>".$message;
     
     $to = "me@preraktrivedi.com";
	 $subject = "Gujju Colleges";

	$from="mayursoni0902@gmail.com";
	$message=$name.$email.$text;

	
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
	
echo '

	<div class="page-header clearfix">

				<h1>Email Sent</h1>

			</div>';

	//echo "Email successfully sent.";

     //echo  '<strong>Verification successful.</strong>'; 

require("footer.php");
} 
?>
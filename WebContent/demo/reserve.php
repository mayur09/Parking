<!doctype html>
<html>
<head>
<title>GujjuColleges Coming Soon</title>
</head>
<style type=text/css>
.php {
  background-color:#3399FF;
  background-position:initial initial;
  background-repeat:initial initial;
  border-bottom-left-radius:0;
  border-top-left-radius:8px;
  border-top-right-radius:8px;
  border-width:1px;
  box-shadow:#C1C1C1 0 -7px 18px;
  color:#111111;
  margin:180px auto;
  padding:15px;
  text-shadow:black 0 0 0;
  width:565px;
  text-align: center;
}
</style>
<body>
<div class="php">
<?php

   $name = $_POST['name']; // required
    $email = $_POST['email']; // required    
 
 	$email_to = "me@preraktrivedi.com";
    	$email_subject = "Subject";
    	$email_from = "GujjuColleges";
 
 if(!empty($name)     &&     !empty($email))
 {
 	$dbc = mysqli_connect('localhost','preragzm_hadmin',';TMK$ZK?lFW3','preragzm_users')
	or die('Error connecting Database');

/*	$query = "SELECT email FROM Gujju WHERE email = '$email'";
	
	$result = mysqli_query($dbc,$query);

	echo $result;
	
	if(!$result){
*/	$insert = "insert into Gujju(name, email) values('$name','$email')";
/*	}
	else {
	echo "Email you are entering is already registered.";
	exit();
	}
*/			
	$result = mysqli_query($dbc, $insert)
	or die('It seems that email "' . $email . '" is already registered with us!');
			
	mysqli_close($dbc);

	
}
else 
{
	echo 'Name and/or Email is/are missing! ';
	exit();
}?>
	<br/>
<?php	
	printf('We will contact you back on "' . $email . '" as soon as we launch!'); ?>
	<br/>
<?php
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $name, $email, $email_from);  
?>
</div>
</body>
</html>
<?php ?>

<!DOCTYPE html>
<html>
<head><title>GujjuColleges Coming Soon</title>
<style type="text/css">
body{
	width: 100%;
}
input[type="submit"] {
background: #3399ff;
border: none;
padding: 0.6em;
color: white;
transition: background 0.5s ease;
-webkit-transition: background 0.5s ease;
-moz-transition: background 0.5s ease;
-o-transition: background 0.5s ease;
-ms-transition: background 0.5s ease;
}

input[type="submit"]:hover {
background: #0080FF;
}

input[type="text"] {
border: none;
box-shadow: 1px 1px 4px #B4B4B4 inset;
height: 1.8em;
border-radius: 2px;
font-size: 15px;
padding: 0px 0px 0px 5px;
}

h1 {
font-family: sans-serif;
}

h3 {
font-family: sans-serif;
}

#note {
display: block;
width: 27em;
margin: 1em auto;
text-align: center;
background: deepskyblue;
padding: 1px 0px 15px 0px;
border-radius: 4px;
box-shadow: 0px 0px 0px #3399ff;
transition: box-shadow 0.5s ease;
-webkit-transition: box-shadow 0.2s ease;
-moz-transition: box-shadow 0.2s ease;
-o-transition: box-shadow 0.2s ease;
-ms-transition: box-shadow 0.2s ease;
}

#note:hover {
box-shadow: 0px 5px 1px #3399ff;
}

img {
	opacity: 1;
	display: block;
	position: relative;
	transition: opacity 1s ease;
	-webkit-transition: opacity 1s ease;
	-moz-transition: opacity 1s ease;
	-o-transition: opacity 1s ease;
	
}
img:hover {
	opacity: 0.4;
}
a{
	display: block;
	position: relative;
	margin-top: 2em;
	text-decoration: none;
	color: #999;
	font-size: 1.5em;
	transition: color 1s ease;
	-webkit-transition: color 1s ease;
	-moz-transition: color 1s ease;
	-o-transition: color 1s ease;
}
a:hover {
	color: #333;
}

.formt {
	margin: 0 auto;
	width: inherit;
}

h1 span {
	font-size: 10px;
}

#logo {
	margin: 9em auto;
	display: block;
	width: 5em;
}

#logo img {
	width: 14.5em;
	display: block;
}

#logo {
margin: 5em auto;
display: block;
width: 14em;
}
</style>
</head>


<body>
<div id="logo">
<img src="http://gujjucolleges.com/images/logo.png" title="GujjuColleges Logo"/>
</div>
<div id="note">
<h3>Subscribe via email.</h3>
<form action="reserve.php" method="post">

<center><p>Submit your email to get up to date news about our site.</p></center>

<table class="formt">
<tr>
<td><lable for="name">Name : </lable></td>
<td><input type="text" required="required" id="name" name="name"/></td>
</tr>

<tr>
<td><lable for="email">Email : </lable></td>
<td><input type="text" required="required" id="email" name="email"/></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Submit"/></td>
</tr>
</form>

</div>
</body>
</html>
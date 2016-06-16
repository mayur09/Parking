<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<!-- Google Web Fonts
  ================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600italic|Handlee' rel='stylesheet' type='text/css'>
	
	<!-- Basic Page Needs
  ================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	
	<title>GujjuColleges | Recommendations</title>	
	
	<meta name="description" content="Contact us page of GujjuColleges">
	<meta name="author" content="GujjuColleges">
	<link rel="icon" type="image/x-icon" href="favicon.ico" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/style.css" />                    
	<link rel="stylesheet" href="css/skeleton.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="./slide/index.css" type="text/css" />
	<link rel="stylesheet" href="./slide/contactable.css" type="text/css" />
	
	<link rel="stylesheet" href="js/layerslider/css/layerslider.css" />
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" />
	 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />	
	<!-- HTML5 Shiv
	================================================== -->
	<script src="js/jquery.modernizr.js"></script>
       
</head>
<body class="wide normal pattern-1 color-1">
	
<div id="wrapper">
	
  <header id="header">
        
        <div class="container">
			
			<div class="eight columns">
				
				<div id="logo">
					<a href="index.php"><img src="images/logo.png"  alt="logo"></a>
				</div><!--/ #logo-->
				
			</div><!--/ .columns-->
			
			<div class="eight columns">
				
				<div class="widget widget_contacts">

					<div class="vcard clearfix">

						<p class="top-phone">Email Us : <span><a href="#">mail@gujjucolleges.com</a></span></p>

					</div><!--/ .vcard-->
		
					<div class="clear"></div>
					
					<ul class="social-icons">
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="dribble"><a href="#">Google</a></li>
					</ul><!--/ .social-icons -->	
		
				</div>
					
			</div><!--/ .columns-->
			
			<div class="clear"></div>
			
			<div class="sixteen columns">
				
				<div class="menu-container clearfix">

					<nav id="navigation" class="navigation clearfix">

						<div class="menu">
							<ul>
								<li><a href="index.php">HOME</a>
								</li>
								  <li><a href="compare.php">COMPARE COLLEGES</a>
								</li>
						  			<li><a href="recommend.php">FIND BEST SUITS</a>
									</li>
								  <li><a href="features.php">FEATURES</a>
								</li>
						  			<li><a href="about-us.php">ABOUT</a> 
									</li>
							  <li class="current-menu-item"><a href="contact.php">CONTACT</a></li>						
                              </div>

					</nav><!--/ .navigation-->
					
					<div class="search-wrapper">

						<form method="post" action="/">

							<p>
								<input name="s" id="s" type="text">
								<button type="submit" class="submit-search">Search</button>
							</p>

						</form>

					</div><!--/ .search-wrapper--> 		

				</div><!--/ .menu-container-->	
				
			</div><!--/ .columns-->
				
		</div><!--/ .container--> 
	  
    </header><!--/ #header-->
	
	<section id="content">
	
		<div class="container clearfix">
			
			<div class="page-header clearfix">

				<h1>Recommandations</h1>

			</div><!--/ .page-header-->

			<div class="sixteen columns">
			</div>
			
			<div class="clear"></div>

			<div class="nine columns">

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
						<label >Rank:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input required="" type="text" name="rank" id="url" />
					</p>


					<p class="recommend-branch">
						<label>Branch: </label>						
                        <input required="" type="text" name="branch" id="email" />
					</p>


					<p class="recommend-city">
						<label for="name">City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input  type="text" name="city" id="name" />
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

<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie no-js" lang="en">
<!--<![endif]-->
<title>Parking Globe</title>
<head>
<!-- Google Web Fonts
  ================================================== -->
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600italic|Handlee'
	rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png"
	href="./images/GujjuCollege Favicon.png">

<link href="./css/bootstrap.min.css" rel="stylesheet">
<script src="./js/jquery203.min.js"></script>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->




<link rel="icon" type="image/x-icon" href="favicon.ico" />

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">


<!-- Stylesheet Including -->

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

<!-- HTML5 Shiv
	================================================== -->
<script src="js/jquery.modernizr.js"></script>
<%-- <%@ include file="./inc/inc_styles.jsp"%> --%>



</head>

<body class="wide normal pattern-1 color-16">

	<div id="wrapper">

		<header id="header">

			<div class="container">

				<div class="eight columns">

					<div id="logo">
						<a href="index.html"><img src="images/logo.png" alt="logo"></a>
					</div>
					<!--/ #logo-->

				</div>
				<!--/ .columns-->


				<!-- Social Media Links -->

				<div class="eight columns">

					<div class="widget widget_contacts">

						<div class="vcard clearfix">

							<!-- 						<p class="top-phone">Call Us : <span>+1 800 132 7527</span></p>
 -->
						</div>
						<!--/ .vcard-->

						<div class="clear"></div>

						<ul class="social-icons">
							<li class="twitter"><a
								href="https://twitter.com/GujjuColleges">Twitter</a></li>
							<li class="facebook"><a
								href="https://www.facebook.com/pages/GujjuColleges/174451579406029">Facebook</a></li>
							<li class="rss"><a href="#">Rss</a></li>
						</ul>
						<!--/ .social-icons -->

					</div>

				</div>
				<!--/ .columns-->

				<%-- <%@ include file="./inc/inc_social.jsp"%>
 --%>
				<div class="clear"></div>


				<%-- <!-- Navigatoin Menu -->
				<%@ include file="./inc/inc_nav.jsp"%>

 --%>
			</div>
			<!--/ .container-->

		</header>
		<!--/ #header-->

		<section id="content">

			<div class="container clearfix">
				<center>
					<div class="page-header clearfix">

						<h1>Thank You For Visiting! Coming Soon</h1>

					</div>
				</center>
				<!--/ .page-header-->

				<div class="nine columns">

					<h4 class="content-title">Lets Keep in Touch</h4>

					<form modelAttribute="user" action="users/newUser" method="POST"
						class="contact-form">

						<!-- 						<p class="message-form-name">
							<input required="" type="text" name="name" id="name" /> <label
								for="name">Your Name: <span class="required">(required)</span></label>
						</p>
 -->
						<p class="message-form-email">
							<input required="" type="email" name="email" id="email" /> <label
								for="email">E-mail: <span class="required">(required)</span></label>
						</p>
						<!-- 					<p class="message-form-mobile">
							<input required="" type="number" name="mobileNum" id="mobileNum" />
							<label for="mobileNum">Mobile No: <span class="required">(required)</span></label>
						</p>
 -->


						<!-- <p class="form-submit">
							<button class="button default" type="submit" id="submit">Submit</button>
						</p> -->

					</form>
					<!--/ .contact-form-->

				</div>
				<!--/ .columns-->



				<!--/ .columns-->

			</div>
			<!--/ .container-->

		</section>
		<!--/ #content-->
		<%-- <%@ include file="WEB-INF/views/common/footer.jsp"%> --%>

		<footer id="footer">

			<div id="contactable"></div>


			<div class="container">

				<div class="eight columns">

					<div class="widget widget_text">

						<h3 class="widget-title">About Us</h3>

						<div class="textwidget">

							<p>We are a group of individuals committed to providing best
								quality information to the students seeking to step into
								professional colleges for higher education.</p>

							<p>Being from Engineering colleges from Gujarat, we
								discovered a big gap in qualititive information to help them
								decide on selecting the college available. With the increase in
								number of colleges , the complexity had increased and there is
								even more intense need to find a solution to address the college
								selection dilemma.</p>

							<p>Our goal is to provide relevant, accurate information of
								colleges in a very user friendly manner so as to make the
								optimum use of it. We constantly endeavor to stretch ourselves
								to improve ourselves and would welcome any suggestions.</p>

						</div>
						<!--/ .textwidget-->

					</div>
					<!--/ .widget -->

				</div>
				<!--/ .columns -->



				<div class="eight columns">

					<div class="widget widget_tag_cloud">

						<h3 class="widget-title">Tag Cloud</h3>

						<div class="tagcloud">
							<a href="#">Audio</a> <a href="#">Design</a> <a href="#">Features</a>
							<a href="#">Logo</a> <a href="#">Photo</a> <a href="#">Photography</a>
							<a href="#">Video</a> <a href="#">Web</a>
						</div>
						<!--/ .tagcloud-->

					</div>
					<!--/ .widget-->

					<div class="widget widget_social">

						<h3 class="widget-title">Social Links</h3>

						<ul class="social-icons clearfix">

							<%@ include file="WEB-INF/views/common/inc/inc_social_footer.jsp"%>



						</ul>
						<!--/ .social-list-->

					</div>
					<!--/ .widget-->

				</div>
				<!--/ .columns -->


				<div class="clear"></div>

				<div class="sixteen columns">

					<div class="adjective clearfix">
						<div class="copyright">
							Copyright © 2016.<a href="http://parkingglobe.com"
								target="_blank">ParkingGlobe.</a> All rights reserved
						</div>
					</div>
					<!--/ .adjective-->

				</div>
				<!--/ .columns-->

			</div>
			<!--/ .container -->

		</footer>
		<!--/ #footer -->



	</div>
	<!--/ #wrapper-->




	<script src="./js/jquery183.min.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/layerslider/js/jquerytransit.js"></script>
	<script src="js/layerslider/js/layerslider.transitions.js"></script>
	<script src="js/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
	<script src="js/jquery.cycle.all.min.js"></script>
	<script src="js/jquery.blackandwhite.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.jflickrfeed.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.touchswipe.min.js"></script>
	<script src="js/config.js"></script>
	<script src="js/custom.js"></script>
	<script src="changer/js/changer.js"></script>
	<script type="text/javascript" src="./slide/jquery.validate.pack.js"></script>
	<script type="text/javascript" src="./slide/jquery.contactable.js"></script>
	<!-- <script>$(function(){$('#contactable').contactable({subject: 'Feedback for GujjuColleges'});});</script>
 -->


	<script src="./js/bootstrap.min.js"></script>
	<script src="./bootstrap-editable/js/bootstrap-editable.js"></script>


</body>
</html>
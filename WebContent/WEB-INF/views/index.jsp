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

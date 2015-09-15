<div class="contain pageContainer">
	<h1 class="pageHeader">Contact Us</h1>
	<p>Thank you for taking the time to review our ever growing company.  Please feel free to contact us directly should you have additional questions. We welcome the opportunity to provide you with competitive pricing and safe, quality workmanship.</p>
	<div class="contactFormContainer">
		<?php 
			if (isset($_GET['success'])) {
				include '_successMessage.php';
			} else {
				include '_contactForm.php';
			}
		?>
	</div>

	<!-- <div class="mapEmbed">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2419.4839717134773!2d-111.31581480000001!3d52.66929770000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x530bb9fe6116e5b1%3A0xa563266e93a9323d!2s4601+49+St%2C+Hardisty%2C+AB+T0B+1V0!5e0!3m2!1sen!2sca!4v1419132156523" width="100%" height="400" frameborder="0" style="border:0"></iframe>
	</div> -->

	<div style="clear:both;"></div>

	<h1 class="pageHeader" style="margin-top:2em;">Careers</h1>
	<div class="contactFormContainer">
		<?php
			if (isset($_GET['sentResume'])) {
				include '_successMessage.php';
			} else {
				include '_sendResume.php';
			}
		?>
	</div>

	<div class="mapEmbed">
		<p>All Structure Group Ltd is always looking for new talent. Please see below for current and future opportunities with ASG LTD.</p>
		<ul>
			<li>Project Manager’s</li>
			<li>Foreman</li>
			<li>Steel Erectors</li>
			<li>Metal Cladder’s/Roofers</li>
			<li>Labourers</li>
		</ul> 
	</div>

</div>
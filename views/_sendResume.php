<form class="contactForm" name="contactForm" id="contactForm" action="mail/_sendResume.php" method="POST" enctype="multipart/form-data">
	<label for="name">Name (required):</label>
	<input required name="name" placeholder="Please enter your name" type="text">
	<label for="email">Email (required):</label>
	<input required name="email" placeholder="Please enter your email" type="email">
	<label for="phone">Phone Number (required):</label>
	<input required name="phone" placeholder="Please enter your phone number" type="tel">
	<label for="uploaded_file">Attach Resume</label>
	<input type="file" id="uploaded_file" name="uploaded_file">
	<input class="contactSubmit" type="submit" value="Submit">
</form>
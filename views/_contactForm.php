		<form class="contactForm" name="contactForm" id="contactForm" action="mail/_sendMail.php" method="POST">
			<label for="name">Name (required):</label>
			<input required name="name" placeholder="Please enter your name" type="text">
			<label for="email">Email (required):</label>
			<input required name="email" placeholder="Please enter your email" type="email">
			<label for="phone">Phone Number (required):</label>
			<input required name="phone" placeholder="Please enter your phone number" type="tel">
			<label for="content">Message:</label>
			<textarea name="content" placeholder="Please enter your message" id="" cols="20" rows="5"></textarea>
			<input class="contactSubmit" type="submit" value="Submit">
		</form>
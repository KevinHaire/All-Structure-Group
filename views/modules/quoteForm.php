<div class="contain quoteFormContainer <?php if (!empty($_POST)){echo 'displayBlock';} ?>">
	<div class="<?php if (!empty($_POST)){echo 'displayNone';} ?>">
		<h1 class="center">Instant Quote!</h1>
		<!-- <p class="center">Fill out the form below to recieve an instant quote. The page will refresh and display your quote.</p> -->
		<p class="center">Please fill out the form below to have an instant quote on erecting your steel building! This quote will be
		 displayed on this page and a copy will be emailed to the address you provide in the contact form. This quote is based on the
		  erection of a basic pre engeneered metal building. If you require a more detailed quote feel free to contact us directly via
		   <a href="mailto:info@allstructuregroup.ca">email</a>, or telephone (780-888-5518). Thank you for your interest in our company!</p>

		<form class="quoteForm" action="" method="POST" enctype="multipart/form-data">
			<input required name="name" type="text" placeholder="Full Name">
			<input required name="email" type="email" placeholder="Email Address">
			<input required name="phone" type="tel" placeholder="Phone Number">
			<input required name="style" type="text" placeholder="Building Style">
			<input required name="width" type="number" placeholder="Width in feet">
			<input required name="length" type="number" placeholder="Length in feet">
			<!-- <input name="height" type="number" placeholder="Height in feet"> -->
			<div class="quoteSelect">
				<select name="insulated" id="insulated">
					<option value="insulated">Insulated</option>
					<option value="notInsulated">Not Insulated</option>
				</select>
			</div>
			<input required name="location" type="text" placeholder="Location">
			<div class="haveBuilding">
				<label for="haveBuilding">Do you have a building?</label>
				<input checked="" type="radio" name="haveBuilding" id="haveBuildingYes" value="yes"> yes
				<input type="radio" name="haveBuilding" id="haveBuildingNo" value="no"> no
			</div>
			<div class="supplyBuilding">
				<label for="supplyBuilding">Would you like us to supply the building?</label>
				<input type="radio" name="supplyBuilding" id="supplyBuildingYes" value="yes"> yes
				<input type="radio" name="supplyBuilding" id="supplyBuildingNo" value="no"> no
			</div>
			<input type="submit">
		</form>

	</div>
	<div class="contain center padding">
		<?php include 'mail/_generateQuote.php'; ?>
	</div>
</div>
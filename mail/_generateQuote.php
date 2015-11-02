<?php

	if (!empty($_POST)) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$style = $_POST['style'];
		$location = $_POST['location'];
		$width = $_POST['width'];
		$length = $_POST['length'];
		$haveBuilding = $_POST['haveBuilding'];
		if ($_POST['supplyBuilding'] != '') {
			$supplyBuilding = $_POST['supplyBuilding'];
		}

		setlocale(LC_MONETARY, 'en_US');
		$costPerSquareNonInsulated = 7;
		$costPerSquareInsulated = 9;
		$squareFootage = $_POST['width'] * $_POST['length'];
		$insulation = $_POST['insulated'];
		if($_POST['insulated'] == 'insulated') {
			$costPerSquare = $costPerSquareInsulated;
		} else {
			$costPerSquare = $costPerSquareNonInsulated;
		}
		// if ($squareFootage < 1000) {
		// 	$numberOfMen = 2;
		// 	$numberOfDays = 2;
		// } else if ($squareFootage >= 1000 && $squareFootage < 4000) {
		// 	$numberOfMen = 4;
		// 	$numberOfDays = 14;
		// } else if ($squareFootage >= 4000 && $squareFootage < 10000) {
		// 	$numberOfMen = 10;
		// 	$numberOfDays = 28;
		// } else if ($squareFootage >= 10000) {
		// 	$numberOfMen = 15;
		// 	$numberOfDays = 48;
		// }
		$cost = money_format('%(#10n', $costPerSquare * $squareFootage);

		if($supplyBuilding) {
			$supplyBuildingText = '<p>Wants All Structure Group to supply building: '.$supplyBuilding.'</p>';
		}

		$text = <<<EOD
			
			<h3><strong>$name</strong></h3>
			<p>$phone</p>
			<p><a href="mailto:$email">$email</a></p>
			<p>Location: $location</p>
			<h3>Building Specs:</h3>
			<p>Style: $style</p>
			<p>Insulation: $insulation</p>
			<p>$width feet wide</p>
			<p>$length feet in length</p>
			<p>Square Footage: $squareFootage</p>
			<p>Already has building: $haveBuilding</p>
			$supplyBuildingText
			<h2>Cost: $cost</h2>
			<p>Calculated based off $$costPerSquare/square x $squareFootage square feet $insulation.</p>

EOD;
		
		

		require 'PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'allstructureweb@gmail.com';     // SMTP username
		$mail->Password = 'Allstructure!12';                 // SMTP password
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->From = 'allstructureweb@gmail.com';
		$mail->FromName = 'AllStructureGroup.ca';
		// $mail->addAddress('info@allstructuregroup.ca');    // Name is optional
		$mail->addAddress('kevin@allstructuregroup.ca');    // Name is optional
		$mail->addReplyTo('info@allstructuregroup.ca', 'Information');

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Quote requested from asgsales.ca';
		$mail->Body    = $text;
										  

		if(!$mail->send()) {
		   echo 'Message could not be sent.';
		   echo 'Mailer Error: ' . $mail->ErrorInfo;
		   exit;
		} else {
			$message = <<<EOD
			
			<h1>Thank You!</h1>
			<p>Please view the details of your quote below. Should you have any further questions or would like to set up a site visit we are available anytime via <a href="mailto:info@allstructuregroup.ca">email</a> or phone: 780-888-5518</p>
			<h3>Building Specs:</h3>
			<p>Style: $style</p>
			<p>Insulation: $insulation</p>
			<p>$width feet wide</p>
			<p>$length feet in length</p>
			<p>Square Footage: $squareFootage</p>
			<p>Already have building: $haveBuilding</p>
			$supplyBuildingText
			<h2>Cost: $cost</h2>
			<br>
			<p style="font-size:.8em">Prices provided do not include price of building if that option is selected and is subject to change at the
			 discretion of All Structure Group LTD.</p>

EOD;

			echo $message;
		}


			$customerEmail = <<<EOD
			
			<h1>Thank You!</h1>
			<p>Please view the details of your quote below. Should you have any further questions or would like to set up a site visit we are available anytime via <a href="mailto:info@allstructuregroup.ca">email</a> or phone: 780-888-5518</p>
			<h3>Building Specs:</h3>
			<p>Style: $style</p>
			<p>Insulation: $insulation</p>
			<p>$width feet wide</p>
			<p>$length feet in length</p>
			<p>Square Footage: $squareFootage</p>
			<p>Already have building: $haveBuilding</p>
			$supplyBuildingText
			<h2>Cost: $cost</h2>
			<br>
			<br>
			<p style="font-size:.8em">Prices provided do not include price of building if that option is selected and is subject to change at the
			 discretion of All Structure Group LTD.</p>

EOD;


		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'allstructureweb@gmail.com';     // SMTP username
		$mail->Password = 'Allstructure!12';                 // SMTP password
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->From = 'allstructureweb@gmail.com';
		$mail->FromName = 'AllStructureGroup.ca';
		$mail->addAddress($email);    // Name is optional
		$mail->addReplyTo('info@allstructuregroup.ca', 'Information');

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Quote requested from asgsales.ca';
		$mail->Body    = $customerEmail;
										  
		if(!$mail->send()) {
		   echo 'Message could not be sent.';
		   echo 'Mailer Error: ' . $mail->ErrorInfo;
		   exit;
		}

	} //END OF POST IF STATEMENT


		


?>

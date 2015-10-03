<?php
	$referer = $_SERVER['HTTP_REFERER'];
	if ($referer == 'http://allstructure.kev/contact') {

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
		$mail->addAddress('info@allstructure.ca');    // Name is optional
		$mail->addAddress('kevin@allstructuregroup.ca');    // Name is optional
		$mail->addReplyTo('info@allstructuregroup.ca', 'Information');

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Contact form from allstructuregroup.ca';
		$mail->Body    = 'Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Phone Number: '.$_POST['phone'].'<br>Message: '.$_POST['content'];
										  

		if(!$mail->send()) {
		   echo 'Message could not be sent.';
		   echo 'Mailer Error: ' . $mail->ErrorInfo;
		   exit;
		} else {
			header( 'Location: http://'.$_SERVER[HTTP_HOST].'/contact?success=1' );
		}

	} else {
		die();
	}
?>
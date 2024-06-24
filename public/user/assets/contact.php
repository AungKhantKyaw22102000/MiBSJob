<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (!$_POST) exit;

function isEmail($email_contact)
{
	return (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $email_contact));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_contact     = $_POST['name_contact'];
$lastname_contact    = $_POST['lastname_contact'];
$email_contact    = $_POST['email_contact'];
$phone_contact   = $_POST['phone_contact'];
$message_contact = $_POST['message_contact'];
$verify_contact   = $_POST['verify_contact'];

if (trim($name_contact) == '') {
	echo '<div class="error_message">You must enter your Name.</div>';
	exit();
} else if (trim($lastname_contact) == '') {
	echo '<div class="error_message">You must enter your Last name.</div>';
	exit();
} else if (trim($email_contact) == '') {
	echo '<div class="error_message">Please enter a valid email address.</div>';
	exit();
} else if (!isEmail($email_contact)) {
	echo '<div class="error_message">You have entered an invalid e-mail address, try again.</div>';
	exit();
} else if (trim($phone_contact) == '') {
	echo '<div class="error_message">Please enter a valid phone number.</div>';
	exit();
} else if (!is_numeric($phone_contact)) {
	echo '<div class="error_message">Phone number can only contain numbers.</div>';
	exit();
} else if (trim($message_contact) == '') {
	echo '<div class="error_message">Please enter your message.</div>';
	exit();
} else if (!isset($verify_contact) || trim($verify_contact) == '') {
	echo '<div class="error_message"> Please enter the verification number.</div>';
	exit();
} else if (trim($verify_contact) != '4') {
	echo '<div class="error_message">The verification number you entered is incorrect.</div>';
	exit();
}

$mail = new PHPMailer(true);

try {
	$mail->isSMTP();
	$mail->Host       = 'smtp.gmail.com';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'akhant057@gmail.com';
	$mail->Password   = 'kfyvadhltynzncwh';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	$mail->Port       = 587;

	$address = "$email_contact"; 

	if (!empty($address) && filter_var($address, FILTER_VALIDATE_EMAIL)) {
		$mail->addAddress($address);
	} else {
		echo 'Error: Invalid recipient email address';
		exit;
	}

	$noreplyAddress = 'noreply@gmail.com';

	$mail->setFrom($noreplyAddress, 'Noreply');

	$mail->addReplyTo($noreplyAddress, 'Noreply');

	$mail->isHTML(false);
	$e_subject = 'You\'ve been contacted by ' . $name_contact . '.';
	$mail->Subject = $e_subject;

	$mail->Body = "Subject: $e_subject" . PHP_EOL . PHP_EOL;
	$mail->Body .= "You have been contacted by $name_contact $lastname_contact with an additional message as follows." . PHP_EOL . PHP_EOL;
	$mail->Body .= "\"$message_contact\"" . PHP_EOL . PHP_EOL;
	$mail->Body .= "We will your contact $name_contact $lastname_contact via email, $email_contact, or via phone $phone_contact";

	$mail->send();

	echo "<div id='success_page' style='padding:25px 0'>";
	echo "<strong>Email Sent.</strong><br>";
	echo "Thank you <strong>$name_contact</strong>,<br> your message has been submitted. We will contact you shortly.";
	echo "</div>";
} catch (Exception $e) {
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>




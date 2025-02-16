<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'petitcarlos180@gmail.com';
	$mail->Password = 'leetuurdnwzbocvw';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom($email, $name);
	$mail->addAddress('petitcarlos180@gmail.com');

	$mail->isHTML(true);

	$mail->Subject = $subject;
	$mail->Body = $message;

	$mail->send();

	echo
	"
	<script>
	alert('Mensaje enviado correctamente!');
	document.location.href = '../html/contact.html';
	</script>
	";
}

?>
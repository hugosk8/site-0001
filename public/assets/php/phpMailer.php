<?php
header('Content-Type: application/json');
require '../../../vendor/autoload.php';
// Define Host Info || Who is sending emails?
define("HOST_NAME", "Mailer tester");
define("HOST_EMAIL", "hugo@0001.fr");
// Define SMTP Credentials || Gmail Informations
define("SMTP_EMAIL", "sauvagehugopro@gmail.com");
define("SMTP_PASSWORD", "cwcr pyje swal koie"); // read documentations

// Define Recipent Info ||  Who will get this email?
define("RECIPIENT_NAME", "Hugo");
define("RECIPIENT_EMAIL", "sauvagehugopro@gmail.com");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../../vendor/phpmailer/PHPMailer/src/Exception.php';
require '../../../vendor/phpmailer/PHPMailer/src/PHPMailer.php';
require '../../../vendor/phpmailer/PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	//Server settings
	$mail->SMTPDebug = 0;                    		  //Enable verbose debug output
	$mail->isSMTP();                                  //Send using SMTP
	$mail->Host       = 'smtp.gmail.com';             //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                         //Enable SMTP authentication
	$mail->Username   = SMTP_EMAIL;                   //SMTP username
	$mail->Password   = SMTP_PASSWORD;                //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //Enable implicit TLS encryption
	$mail->Port       = 465;                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	//Recipients
	$mail->setFrom(HOST_EMAIL, HOST_NAME);
	$mail->addAddress(RECIPIENT_EMAIL, RECIPIENT_NAME);//Add a recipient

	//Content
	$name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
	$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
	$phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
	$subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9 ]/", "", $_POST['subject']) : "";
	$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";

	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'A contact request send by ' . $name;
	$mail->Body    = 'Name: ' . $name . "<br>";
	$mail->Body .= 'Email: ' . $senderEmail . "<br>";


	if ($phone) {
		$mail->Body .= 'Phone: ' . $phone . "<br>";
	}
	if ($subject) {
		$mail->Body .= 'Subject: ' . $subject . "<br>";
	}

	$mail->Body .= 'message: ' . "<br>" . $message;

	$mail->send();
    echo json_encode(["success" => true, "message" => "Merci de nous avoir contacté. Nous vous répondrons dès que possible."]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => "Le message n'a pas pu être envoyé. Erreur du mailer : {$mail->ErrorInfo}"]);
}

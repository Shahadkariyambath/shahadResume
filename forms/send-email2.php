<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "shahadchikku@gmail.com";
$mail->Password = "password";

$mail->setFrom($email, $name);
$mail->addAddress("shahadchikku@gmail.com", "Shahad");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo ("email sent");
// header("Location: sent.html");
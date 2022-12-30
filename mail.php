<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name\nMessage:\n$message";
$recipient = "kontakt@nyskon.pl";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";

$honeypot = $_POST['firstname'];

if( ! empty( $honeypot ) ){
	return;
}else{
mail($recipient, $subject, $formcontent, $mailheader) or die("Wystąpił błąd!");
header ("Location: kontakt.html");
}
?>
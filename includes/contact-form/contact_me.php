<?php
// Check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create email body and send it
$to = 'info@redeor.com';
$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message from your website. \n\n".
				  "Start message:\n \nName: $name \n ".
				  "Email: $email_address\n Message \n $message";
$headers = "From: $email_address\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>

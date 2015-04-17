<?php
// check if fields passed are empty
if(
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	

$email_address = $_POST['email'];

	
// create email body and send it	
$to = 'romelpanahon@yahoo.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Fullscreen One Page Theme Contact Form:  name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details: \n\nEmail: $email_address";
$headers = "From: testing site\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
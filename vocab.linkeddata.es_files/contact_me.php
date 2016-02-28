<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Rellene el campo por favor!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'biotechagronomos@gmail.com'; // put your email
$email_subject = "Email másteres:  $name";
$email_body = "Has recibdo un pequeño mensaje. \n\n".
				  " Here are the details:\n \nName: $name \n ".
				  "Email: $email_address\n Message \n $message";
$headers = "From: biotechagronomos@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
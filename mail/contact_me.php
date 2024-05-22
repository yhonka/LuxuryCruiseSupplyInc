 <?php
// Check for empty fields
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
	
// Create the email and send the message
$to = 'yhonka.yjml@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "PRUEBA WEB:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;	


// <?php

//     $destinatario = 'yhonka.yjml@gmail.com';
    
//     $nombre = $_POST['name'];
//     $mensaje = $_POST['message'];
//     $email = $_POST['email'];
//     $email_subject = "PRUEBA WEB:  $name";
//     $header = "Enviado desde la pagina test.com";
//     $mensajeCompleto = "Correo: " . $email  . "\nAtentamente: " . $nombre . " " . "\nMensaje: " . $mensaje ;
    
//     mail($destinatario, $email_subject  utf8_decode($mensajeCompleto), $header );
    
//     echo" <script>alert('Email send')</script>";
//     echo" <script>setTimeout(\"location.href='index.html'\",100)</script>";

?> 


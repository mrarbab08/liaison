<?php
//get data from form  
$name = $_POST['name'];

$email= $_POST['email'];

$message= $_POST['message'];
$to = "alimehfoox@gmail.com";

$txt ="Name = ". $name . "\r\n   Email = " . $email . "\r\n Message =" . $message;
$headers = "From: service_quote@liaisonco.com" . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:../thanks.php");
?>
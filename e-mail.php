<?php
//get data from form  

$email= $_POST['email'];

$to = "alimehfoox@gmail.com";

$txt ="Email = ". $email;
$headers = "From: subscription@liaisonco.com" . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:../thanks.php");
?>
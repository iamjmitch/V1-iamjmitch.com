<?php

$name = $_POST['name'];

$isBot = $_POST['isbot'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$emaill = strlen($_POST['email']);

$trigger = "0";



if (strlen("1") > strlen($phone))
	{$trigger ++;
	 $phone= "not listed";}
else
	{$trigger= "15";}

if (strlen("1") > strlen($email))
	{$trigger ++;
	 $email= "iamjmitch.com";}
	 
	 
else
	{$trigger = "15";}



$message = $_POST['message'];
$to = "iamjmitch1990@gmail.com";
$headers ="from: ".$email;
$subject = "New Website Enquiry From ".$name;

$body = "Hi James, \n\nYou have a new website enquiry\n\nName: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\nMessage:\n".$message;
if ($trigger == "2")
{
	header("Location: /oops");
	
	
}
else
	if ($isBot !=''){
		header("Location: /oops");
	}
else
{
mail ($to,$subject,$body,$headers);
header("Location: /message-sent");

}




;?>
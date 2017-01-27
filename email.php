<?php
$to = "n.lahoti01@gmail.com";
//echo $to;
$subject = "Website Query Mail";
$name = "";
$contact = "";
$email="";
$message="";
$message_to_send="";
$x="n.lahoti01@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST['email'];
    $contact = $_POST['footerphone'];
		$name = $_POST['fullname'];
		$message = $_POST['message'];
	}
$message_to_send= "Hi! My name is " . $name . ". My message is " . $message . ". My contact number is ". $contact ." . My email id is: " . $email;
  //send email
  mail($to, "$subject", $message_to_send, "From:" . $x);
  
$done="TRUE";

if ($done)
{
   header("Location: index.php");
    exit;
}


  //Email response
  //echo "Thank you for contacting us!";
//echo "NAWAL";
//echo $to;
//echo $name;
//echo $email;
//echo $message;
?> 

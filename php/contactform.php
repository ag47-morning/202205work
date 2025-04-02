<?php
 // configuration

$email_it_to = "yexxios@naver.com";

$error_message = "Please complete the form first";

$rnd=$_POST['rnd'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$body=$_POST['body'];


if(!isset($rnd) || !isset($name) || !isset($email) || !isset($subject) || !isset($body)) {
	echo $error_message;
    die();
}

$subject = stripslashes($subject);
$email_from = $email;

$email_message = "홈페이지 메일발송"."<br />\n<br />\n"."by '".stripslashes($name)."'<br />\n<br />\n email: ".$email_from;
$email_message .="<br />\n<br />\n on ".date("d/m/Y")."<br />\n<br />\n";
$email_message .= stripslashes($body);
$email_message .="<br />\n<br />\n";

// Always set content-type when sending HTML email


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";
$headers .= 'From: '.stripslashes($name);

mail($email_it_to,$subject,$email_message,$headers);



?>

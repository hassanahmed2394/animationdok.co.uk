<?php
## CONFIG ##
include("connectiondb.php");

# LIST EMAIL ADDRESS
$recipient = "order@animationdok.co.uk";

# SUBJECT (Subscribe/Remove)
$subject = "Banner Form Query";
// $ebpage = "App development";

# RESULT PAGE
$location = "/thankyou";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "support@animationdok.co.uk";

# MAIL BODY
$subscriber_email = $_REQUEST['bEmail'];
$subscriber_subject = "Thankyou!! One of Our Consultant Will Get Back To you Shortly
";
$subscriber_email_data = file_get_contents('https://www.animationdok.co.uk/email/queryFormThankyou.html');

if(isset($_REQUEST['hiddencapcha']) && $_REQUEST['hiddencapcha'] == "" ){
  if(isset($_REQUEST['bName']) && $_REQUEST['bName'] != "" 
  && isset($_REQUEST['bEmail']) && $_REQUEST['bEmail'] != "" 
  && isset($_REQUEST['bNumber']) && $_REQUEST['bNumber'] != ""){


$body .= "Name: ".$_REQUEST['bName']." \n";
$body .= "Email: ".$_REQUEST['bEmail']." \n";
$body .= "Country Code: ".$_REQUEST['pc']." \n";
$body .= "Country Name: ".$_REQUEST['ctry']." \n";
$body .= "Visitor's IP: ".$_REQUEST['cip']." \n";
$body .= "Number: ".$_REQUEST['bNumber']." \n";
$body .= "Message: ".$_REQUEST['bMessage']." \n";
$body .= "Page URL: ".$_REQUEST['blocationURL']." \n";


// $body .= "Page: ".$ebpage." \n";

if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
else{ $sql = 'insert into bannerForm (cust_name ,cust_email ,cust_phonenumber ,cust_message ,pageURL,countryName, countryCode, VisitorIP ) values ("'.$_REQUEST['bName'].'","'.$_REQUEST['bEmail'].'","'.$_REQUEST['bNumber'].'","'.$_REQUEST['bMessage'].'","'.$_REQUEST['blocationURL'].'","'.$_REQUEST['ctry'].'","'.$_REQUEST['pc'].'","'.$_REQUEST['cip'].'")';
mysqli_query($con,$sql);
mysqli_close($con);
}

// $headers = "From: " . $sender . "\r\n";
// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// # add more fields here if required
// ## SEND MESSGAE ##

// mail( $recipient, $subject, $body,  "From: $sender" ) or die ("Mail could not be sent.");
// mail( $subscriber_email, $subscriber_subject, $subscriber_email_data, $headers) or die ("Unable to send email to subscriber");

// ## SHOW RESULT PAGE ##
// header( "Location: $location" );





/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.animationdok.co.uk";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "support@animationdok.co.uk";
//Password to use for SMTP authentication
$mail->Password = "TQF$&=GMO+&G";
//Set who the message is to be sent from
$mail->setFrom('support@animationdok.co.uk', 'Animation Dok');
//Set an alternative reply-to address
$mail->addReplyTo('support@animationdok.co.uk', 'Animation Dok');
//Set who the message is to be sent to
$mail->addAddress('order@animationdok.co.uk');
// $mail->addAddress('joe@example.net', 'Joe User');
// $mail->addBCC('order@animationdok.com');
//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML($body);
$mail->Body =$body;
//Replace the plain text body with one created manually
// $mail->AltBody = 'This is a plain-text message body';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');
$mail->send();
//send the message, check for errors
// if (!$mail->send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// } else {
    // echo "Message sent!";
    // header( "Location: $location" );
// }







//Create a new PHPMailer instance
$clientmail = new PHPMailer;
//Tell PHPMailer to use SMTP
$clientmail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$clientmail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$clientmail->Debugoutput = 'html';
//Set the hostname of the mail server
$clientmail->Host = "mail.animationdok.co.uk";
//Set the SMTP port number - likely to be 25, 465 or 587
$clientmail->Port = 465;
$clientmail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$clientmail->SMTPAuth = true;
//Username to use for SMTP authentication
$clientmail->Username = "support@animationdok.co.uk";
//Password to use for SMTP authentication
$clientmail->Password = "TQF$&=GMO+&G";
//Set who the message is to be sent from
$clientmail->setFrom('support@animationdok.co.uk', 'Animation Dok');
//Set an alternative reply-to address
$clientmail->addReplyTo('support@animationdok.co.uk', 'Animation Dok');
//Set who the message is to be sent to
$clientmail->addAddress($subscriber_email);
// $clientmail->addAddress('joe@example.net', 'Joe User');
// $clientmail->addBCC('order@animationdok.com');
//Set the subject line
$clientmail->Subject =$subscriber_subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $clientmail->msgHTML($body);
$clientmail->msgHTML(file_get_contents('https://www.animationdok.co.uk/email/queryFormThankyou.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
// $clientmail->AltBody = 'This is a plain-text message body';
//Attach an image file
// $clientmail->addAttachment('images/phpmailer_mini.png');
$clientmail->send();
//send the message, check for errors
// if (!$clientmail->send()) {
//     echo "Mailer Error: " . $clientmail->ErrorInfo;
// } else {
    // echo "Message sent!";
    header( "Location: $location" );
// }










 }

    
}

?>

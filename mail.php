<?php
/**
* This section ensures that Twilio gets a response.
*/
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<Response></Response>'; //Place the desired response (if any) here.
/**
* This section actually sends the email.
*/
$to = "xxxxx@xxxxxxx"; // Your email address.
$subject = "Message from {$_REQUEST['From']}";
$message = "You have received a message from {$_REQUEST['From']}.";
$message .= "To listen to this message, please visit this URL: {$_REQUEST['RecordingUrl']}";
$headers = "From: tom.jones@audiologiks.com"; // Who should it come from?
mail($to, $subject, $message, $headers);

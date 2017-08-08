<?php
 require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host       = "mail.domain.com"; // SMTP server
    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                               // 1 = errors and messages
                                               // 2 = messages only
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "zzzzz@xxx.com";  // GMAIL username
    $mail->Password   = "xxxxxxxxxx";            // GMAIL password
    $mail->addAddress('xxxxxxx.co.jp', 'support');

     $mail->isHTML(true);
    $mail->Subject = "link to Audio File {$_REQUEST['From']}";

// The HTML-formatted body of the email
    $mail->Body    = "To listen to this message, please visit this URL:{$_REQUEST['RecordingUrl']}";

// The alternative email body; this is only displayed when a recipient
// opens the email in a non-HTML email client. The \r\n represents a 
// line break.
    $mail->AltBody = "Email Test\r\nThis email was sent through the 
    gmail SMTP interface using the PHPMailer class.";

  if(!$mail->send()) {
    echo 'Email not sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    echo 'Email sent!';
  }

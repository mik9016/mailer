<?php
use PHPMailer\PHPMailer\PHPMailer;

include_once 'vendor/autoload.php';

$username = "";
$password = "";

$gmailSMTP = 'smtp.gmail.com';
$officeSMTP = 'smtp.office365.com';

// Config
$mail = new PHPMailer(true);
$mail->CharSet    = "UTF-8";
$mail->Encoding = 'base64';
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = $gmailSMTP;
$mail->Username   = $username;
$mail->Password   = $password;

//
$HOWOGEEmail = "";
$senderEmail = "";
$testAdresat = "";

$mail->IsHTML(true);
$mail->AddAddress($HOWOGEEmail, "HOWOGE");
$mail->SetFrom($senderEmail, "mik");
$mail->Subject = "Subject";

// Mail Content
$content = "HTML CONTENT";

// LOOP

for ($i = 0; $i <= 35; $i++) {
    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Error while sending Email.";
        var_dump($mail);
    } else {
        echo "Email sent successfully";
    }
}


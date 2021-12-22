<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

function randomString($n)
{
    $characters = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }
    return $str;
}

function sendmail($title, $content, $emailSend)
{
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // gửi mail SMTP
        $mail->Host = "ssl://smtp.gmail.com";  // Set the SMTP server to send through

        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'trugtie2021@gmail.com'; // SMTP username
        $mail->Password = 'Tien13122020#gmail'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 465; // TCP port to connect to
        //Recipients
        $mail->CharSet = 'UTF-8';
        $mail->setFrom("atlaptop@gmail.com", "ATLAPTOP");
        $mail->addAddress($emailSend, "Khách hàng"); // Add a recipient
        // $mail->addAddress('ellen@example.com'); // Name is optional
        $mail->addReplyTo("trugtie2021@gmail.com", 'Admin');
        $mail->addCC($emailSend);
        // $mail->addBCC('');
        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
        // Content
        $mail->WordWrap = 500;
        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = $title;

        // Thông tin Khách hàng
        $mail->Body = $content;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        exit;
    }
}

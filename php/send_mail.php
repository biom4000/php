<?php
/**
 * Created by PhpStorm.
 * User: andy_wang
 * Date: 2018/6/14
 * Time: 下午 02:59
 */
require_once('PHPMailer/src/PHPMailer.php');
require_once('PHPMailer/src/SMTP.php');
//require("PHPMailer/src/Exception.php");
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.mail.yahoo.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "ga9871109kppq";
$mail->Password = "lf2net910255";
$mail->SetFrom("ga9871109kppq@yahoo.com.tw");
$mail->Subject = "Test1234";
$mail->Body = "hello";
$mail->AddAddress($email);

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "ok";
}
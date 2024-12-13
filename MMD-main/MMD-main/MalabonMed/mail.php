<?php 
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\MMD\MMD-main\MMD-main\MalabonMed\vendor\autoload.php';

$response = [
    "success" => false,
    "message" => ""
];

if (isset($_POST['email'])) {
    $to = $_POST['email'];
    $otp = $_SESSION['otp'];
    $fn = $_SESSION['fn'];
    $ls = $_SESSION['ls'];
    $subject = 'MalabonMed Email Verification';
    $message = "Dear {$fn} {$ls}, <br> We are excited to inform you that we have received your referral code for MalabonMed. <br> Thank you for trusting us to be part of your healthcare journey. 
    <br> <b> Your referral code: {$otp} </b> <br> <br> Thank you for choosing MalabonMed. We look forward to serving you and ensuring your well-being.<br> <br> Best regards, MalabonMed.";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'malabonmed@gmail.com';
        $mail->Password = 'wgkq lzdj hkef kpax';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('malabonmed@gmail.com', 'MalabonMed');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = strip_tags($message);

        $mail->send();

        $response["success"] = true;
        $response["message"] = "Email sent successfully!";
    } catch (Exception $e) {
        $response["message"] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    $response["message"] = "Invalid request.";
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
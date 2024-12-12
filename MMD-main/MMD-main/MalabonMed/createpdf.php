<?php 
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // Adjust the path as necessary

// Retrieve session data
$otp = $_SESSION['otp'];
$fn = $_SESSION['fn'];
$md = $_SESSION['md'];
$ls = $_SESSION['ls'];
$gender = $_SESSION['gender'];
$contact = $_SESSION['contact'];
$email = $_SESSION['email'];
$civil_status = $_SESSION['civil_status'];
$address = $_SESSION['address'];
$city = $_SESSION['city'];
$zip = $_SESSION['zip'];
$barangay = $_SESSION['barangay'];
$clinicName = $_SESSION['clinicName'];
$clinicAddress = $_SESSION['clinicAddress'];
$appointmentt = $_SESSION['appointmentt'];
$other_option = $_SESSION['other_option'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];
$time2 = $_SESSION['time2'];


    // Create a new mPDF instance
    $mpdf = new \Mpdf\Mpdf();

    // Create PDF content with modern design
    $data = "
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }
        h1 {
            color: #007BFF;
            text-align: center;
        }
        .container {
            border: 1px solid #007BFF;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .field {
            margin-bottom: 10px;
        }
        .field strong {
            color: #007BFF;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
    <div class='container'>
        <h1>Your Appointment Form</h1>
        <div class='field'><strong>REFERRAL CODE:</strong> " . htmlspecialchars($otp) . "</div>
        <div class='field'><strong>First Name:</strong> " . htmlspecialchars($fn) . "</div>
        <div class='field'><strong>Middle Name:</strong> " . htmlspecialchars($md) . "</div>
        <div class='field'><strong>Last Name:</strong> " . htmlspecialchars($ls) . "</div>
        <div class='field'><strong>Gender:</strong> " . htmlspecialchars($gender) . "</div>
        <div class='field'><strong>Contact:</strong> " . htmlspecialchars($contact) . "</div>
        <div class='field'><strong>Email:</strong> " . htmlspecialchars($email) . "</div>
        <div class='field'><strong>Civil Status:</strong> " . htmlspecialchars($civil_status) . "</div>
        <div class='field'><strong>Address:</strong> " . htmlspecialchars($address) . "</div>
        <div class='field'><strong>City:</strong> " . htmlspecialchars($city) . "</div>
        <div class='field'><strong>ZIP Code:</strong> " . htmlspecialchars($zip) . "</div>
        <div class='field'><strong>Barangay:</strong> " . htmlspecialchars($barangay) . "</div>
        <div class='field'><strong>Clinic Name:</strong> " . htmlspecialchars($clinicName) . "</div>
        <div class='field'><strong>Clinic Address:</strong> " . htmlspecialchars($clinicAddress) . "</div>
        <div class='field'><strong>Appointment Type:</strong> " . htmlspecialchars($appointmentt) . "</div>
        <div class='field'><strong>Other Option:</strong> " . htmlspecialchars($other_option) . "</div>
        <div class='field'><strong>Date:</strong> " . htmlspecialchars($date) . "</div>
        <div class='field'><strong>Time:</strong> " . htmlspecialchars($time) . " " . htmlspecialchars($time2) . "</div>
    </div>
    <div class='footer'>Thank you for choosing our service!</div>
    ";

    // Write HTML to PDF
    $mpdf->WriteHTML($data);

    // Output to browser
    $mpdf->Output('appointment_form.pdf', 'D'); // 'D' forces download

    
?>
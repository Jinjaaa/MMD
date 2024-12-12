<?php
session_start(); // Start the session


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve session variables
    $otp = isset($_SESSION['otp']) ? $_SESSION['otp'] : '';
    $fn = isset($_SESSION['fn']) ? $_SESSION['fn'] : '';
    $md = isset($_SESSION['md']) ? $_SESSION['md'] : '';
    $ls = isset($_SESSION['ls']) ? $_SESSION['ls'] : '';
    $gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';
    $contact = isset($_SESSION['contact']) ? $_SESSION['contact'] : '';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $civil_status = isset($_SESSION['civil_status']) ? $_SESSION['civil_status'] : '';
    $address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
    $city = isset($_SESSION['city']) ? $_SESSION['city'] : '';
    $zip = isset($_SESSION['zip']) ? $_SESSION['zip'] : '';
    $barangay = isset($_SESSION['barangay']) ? $_SESSION['barangay'] : '';
    $clinicName = isset($_SESSION['clinicName']) ? $_SESSION['clinicName'] : '';
    $clinicAddress = isset($_SESSION['clinicAddress']) ? $_SESSION['clinicAddress'] : '';
    $appointmentt = isset($_SESSION['appointmentt']) ? $_SESSION['appointmentt'] : '';
    $other_option = isset($_SESSION['other_option']) ? $_SESSION['other_option'] : '';
    $date = isset($_SESSION['date']) ? $_SESSION['date'] : '';
    $time = isset($_SESSION['time']) ? $_SESSION['time'] : '';
    $time2 = isset($_SESSION['time2']) ? $_SESSION['time2'] : '';

    // Prepare the data to be saved
    $data = [
        $otp,
        $fn,
        $md,
        $ls,
        $gender,
        $contact,
        $email,
        $civil_status,
        $address,
        $city,
        $zip,
        $barangay,
        $clinicName,
        $clinicAddress,
        $appointmentt,
        $other_option,
        $date,
        $time,
        $time2
    ];

    // Step 1: Create or open the CSV file
    $csvFile = 'registered.csv';
    $fileHandle = fopen($csvFile, 'a'); // Open the file in append mode

    // Step 2: Check if the file is empty and write headers if it is
    if (filesize($csvFile) == 0) {
        // Define the headers
        $headers = [
            'OTP',
            'First Name',
            'Middle Name',
            'Last Name',
            'Gender',
            'Contact',
            'Email',
            'Civil Status',
            'Address',
            'City',
            'ZIP Code',
            'Barangay',
            'Clinic Name',
            'Clinic Address',
            'Appointment',
            'Other Option',
            'Date',
            'Time',
            'Time 2'
        ];
        // Write the headers to the CSV file
        fputcsv($fileHandle, $headers);
    }

    // Step 3: Write the data to the CSV file
    fputcsv($fileHandle, $data); // Write the data as a new row

    // Step 4: Close the file
    fclose($fileHandle);

    header("Location: thank_page.php");
    exit();
}
?>
<?php
session_start();

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>MalabonMed</title>
    
    <script>
        function enableGoBackLink() {
            const goBackLink = document.getElementById('goBackLink');
            goBackLink.classList.remove('disabled');
            goBackLink.classList.add('enabled');
            goBackLink.style.pointerEvents = 'auto'; // Enable pointer events
            goBackLink.style.color = 'blue'; // Change color to indicate it's clickable
        }
    </script>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="">
            <div class="container-md text-center">
                <h1 class="title_4">
                    DATA HAS BEEN SAVED!
                </h1>
                <p>Please save this form as a PDF file, as you will need to present it to the clinic during your appointment. Thank you!</p>
                <img src="assets/thank.png" class="img-fluid w-75">
            </div>
            <div class="container-md text-center">
                <form method="post" action="createpdf.php" onsubmit="enableGoBackLink()">
                    <input type="submit" class="btn btn-success btn-lg my-2" value="SAVE TO PDF"><br>
                </form>
                <a href="index.php" id="goBackLink" class="nav-link disabled" style="pointer-events: none; color: gray;">Go back</a>
            </div>
        </div>
    </div>
</body>

</html> 
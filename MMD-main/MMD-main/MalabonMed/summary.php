<?php
include("header.html");
session_start();




// Check if the session variables are set
if (!isset($_SESSION['fn'])) {
    echo "No data submitted.";
    exit();
}



// Retrieve the data from the session
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

$_SESSION['otp'] = $otp;
$_SESSION['fn'] = $fn;
$_SESSION['ls'] = $ls;
$_SESSION['md'] = $md;
$_SESSION['gender'] = $gender;
$_SESSION['contact'] = $contact;
$_SESSION['email'] = $email;
$_SESSION['civil_status'] = $civil_status;
$_SESSION['address'] = $address;
$_SESSION['city'] = $city;
$_SESSION['zip'] = $zip;
$_SESSION['barangay'] = $barangay;
$_SESSION['clinicName'] = $clinicName;
$_SESSION['clinicAddress'] = $clinicAddress;
$_SESSION['appointmentt'] = $appointmentt;
$_SESSION['other_option'] = $other_option;
$_SESSION['date'] = $date;
$_SESSION['time'] = $time;
$_SESSION['time2'] = $time2;

// Clear the session data if needed
// session_unset(); // Uncomment this line if you want to clear the session after displaying

// Check if the form has been submitted

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MalabonMed</title>
    <script type="module">
        import Chatbox from 'https://cdn.jsdelivr.net/npm/@chaindesk/embeds@latest/dist/chatbox/index.js';

        const widget = await Chatbox.initBubble({
            agentId: 'cm4h7o6ij03o6ppjjhwv325he',

            // optional 
            // If provided will create a contact for the user and link it to the conversation
            contact: {
                firstName: 'John',
                lastName: 'Doe',
                email: 'customer@email.com',
                phoneNumber: '+33612345644',
                userId: '42424242',
            },
            // optional
            // Override initial messages
            initialMessages: [
                'Hello Georges how are you doing today?',
                'How can I help you ?',
            ],
            // optional
            // Provided context will be appended to the Agent system prompt
            context: "The user you are talking to is John. Start by Greeting him by his name.",
        });

        // open the chat bubble
        widget.open();

        // close the chat bubble
        widget.close()

        // or 
        widget.toggle()
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="container-md">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" style="text-decoration: none;">Home</a></li>
                    <li class="breadcrumb-item"><a href="reservation.php" style="text-decoration: none;">Reservation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Summary</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid pb-5">

        <div class="container-md text-center mt-5">
            <h1 class="title_4">
                Summary of Your Submission
            </h1>
            <p>A Brief Recap of the Information Provided in Your Submission Form</p>
        </div>
        <div class="container-md rounded-3 border p-5 shadow-sm">
            <h1 class="py-3"><strong>Personal Information</strong></h1>
            <form class="row g-3 needs-validation" method='post' action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" novalidate>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark " name="fn" value="<?php echo htmlspecialchars($fn); ?>" readonly>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">Middle name</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark " name="mn" value="<?php echo htmlspecialchars($md); ?>" readonly>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">Last name</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="ls" value="<?php echo htmlspecialchars($ls); ?>" readonly>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">Gender</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="gender" value="<?php echo htmlspecialchars($gender); ?>" readonly>
                </div>

                <!---->

                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">Contact</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="contact" value="<?php echo htmlspecialchars($contact); ?>" readonly>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">Civil Status</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="civil_status" value="<?php echo htmlspecialchars($civil_status); ?>" readonly>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">Address</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="gender" value="<?php echo htmlspecialchars($address); ?>" readonly>
                </div>

                <!---->

                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">City</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="city" value="<?php echo htmlspecialchars($city); ?>" readonly>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">Barangay</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="barangay" value="<?php echo htmlspecialchars($barangay); ?>" readonly>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">Zip</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="zip" value="<?php echo htmlspecialchars($zip); ?>" readonly>
                </div>

                <hr>
                <h1 class="py-3"><strong>Appointment Form</strong></h1>
                <form class="row g-3 needs-validation" method='post' action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" novalidate>
                    <div class="col-md-3 my-3">
                        <label for="validationCustom01" class="form-label">Procedure for Appointment</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="fn" value="<?php echo htmlspecialchars($appointmentt); ?>" readonly>
                    </div>
                    <div class="col-md-3 my-3">
                        <label for="validationCustom01" class="form-label">(specified appointment)</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="other_option" value="<?php echo htmlspecialchars($other_option); ?>" readonly>
                    </div>
                    <div class="col-md-3 my-3">
                        <label for="validationCustom01" class="form-label">Preferred Appointment Date</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="date" value="<?php echo htmlspecialchars($date); ?>" readonly>
                    </div>
                    <div class="col-md-3 my-3">
                        <label for="validationCustom01" class="form-label">Preferred Appointment Time</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="time" value="<?php echo htmlspecialchars($time);
                                                                                                                                                echo htmlspecialchars($time2); ?>" readonly>
                    </div>

                    <div class="col-md-6 my-3">
                        <label for="validationCustom01" class="form-label">Clinic Name</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="clinicName" value="<?php echo htmlspecialchars($clinicName); ?>" readonly>
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="validationCustom01" class="form-label">Clinic Address</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark" name="clinicAddress" value="<?php echo htmlspecialchars($clinicAddress); ?>" readonly>
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="validationCustom01" class="form-label">REFERRAL CODE: (PLEASE REMEMBER)</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark bg-primary-subtle" name='otp' value="<?php echo htmlspecialchars($otp); ?>" readonly>
                    </div>

                    <!---->
                </form>

                <hr>
                <div class="row">
                    <div class="col-md-4 my-1">
                            <div class="card-header">
                                <h2>Email Verification</h2>
                            </div>
                            <div class="card-body">
                                <form id="emailForm">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Email</label>
                                        <input type="text" oninput="this.value = this.value.toUpperCase();"
                                            class="form-control text-dark" name="email"
                                            value="<?php echo htmlspecialchars($email); ?>" readonly>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Email Verification</button>
                                </form>
                                <div id="alertBox" class="mt-3" style="display: none;">
                                    <div id="alertMessage" class="alert"></div>
                                </div>
                            </div>
                    </div>
                </div>
                <script>
                    document.getElementById("emailForm").addEventListener("submit", function(event) {
                        event.preventDefault(); // Prevent form submission

                        const formData = new FormData(this);

                        fetch("mail.php", {
                                method: "POST",
                                body: formData,
                            })
                            .then(response => response.json())
                            .then(data => {
                                const alertBox = document.getElementById("alertBox");
                                const alertMessage = document.getElementById("alertMessage");

                                alertMessage.textContent = data.message;
                                alertMessage.className = `alert ${data.success ? 'alert-success' : 'alert-danger'}`;
                                alertBox.style.display = "block";
                            })
                            .catch(error => {
                                const alertBox = document.getElementById("alertBox");
                                const alertMessage = document.getElementById("alertMessage");

                                alertMessage.textContent = "An error occurred. Please try again.";
                                alertMessage.className = "alert alert-danger";
                                alertBox.style.display = "block";
                            });
                    });
                </script>
                <div class="container-md">
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-md-flex justify-content-md-start my-1">
                            <form method="post" action="cancel.php">
                                <button type="submit" class="btn btn-danger">Cancel Appoinment</button>
                            </form>
                        </div>
                        <div class="col d-md-flex justify-content-md-end my-1">
                            <form method="post" action="save.php">
                                <button type="submit" class="btn btn-success">Save Appointment</button>
                            </form>
                        </div>

                    </div>
                </div>

        </div>
    </div>
    <script>




    </script>
</body>
</head>
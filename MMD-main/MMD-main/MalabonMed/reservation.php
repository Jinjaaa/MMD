<?php
include("header.html");


date_default_timezone_set('Asia/Manila');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fn = $_POST['fn'];
    $md = $_POST['mn'];
    $ls = $_POST['ls'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $civil_status = $_POST['civil_status'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $barangay = $_POST['barangay'];
    $clinicName = $_POST['clinicName'];
    $clinicAddress = $_POST['clinicAddress'];
    $appointmentt = $_POST['appointmentt'];
    $other_option = $_POST['other_option'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $time2 = $_POST['time2'];
    $otp = $_POST['otp'];

    echo $fn . "\n";
    echo $ls . "\n";
    echo $md . "\n";
    echo $gender . "\n";
    echo $contact . "\n";
    echo $email . "\n";
    echo $civil_status . "\n";
    echo $city . "\n";
    echo $barangay . "\n";
    echo $appointmentt . "\n";
    echo $other_option . "\n";
    echo $date . "\n";
    echo $time;
    echo $time2;

    // Start a session to store the data
    session_start();
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

    // Redirect to the summary page
    header("Location: summary.php");
    exit();
}
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
                    <li class="breadcrumb-item active" aria-current="page">Reservation</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="container-md pb-5">
            <h1><strong>Reservation Form</strong></h1>
            <p class="card-text text-body-secondary">
                Convenient Appointment Scheduling for Malabon Barangay Clinics! Reserve your spot easily and ensure timely medical care with MalabonMed.
            </p>
        </div>
        <!--Form Start-->
        <div class="container-md rounded-3 border p-5 shadow-sm">
            <h1 class="py-3"><strong>Personal Information</strong></h1>
            <form class="row g-3 needs-validation" method='post' action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" novalidate>
                <div class="col-md-3 my-3">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-body-secondary" name="fn" id="validationCustom01" maxlength="30" pattern="^(?!.$)(?!.*\d)[A-Za-z\s]+$" placeholder="John" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a first name.
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom02" class="form-label">Middle name</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-body-secondary" name="mn" maxlength="30" pattern="^(?!.$)(?!.*\d)[A-Za-z\s]+$" id="validationCustom02" placeholder="Bloggs" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter middle name.
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-body-secondary" name="ls" maxlength="30" pattern="^(?!.$)(?!.*\d)[A-Za-z\s]+$" id="validationCustom02" placeholder="Doe" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter last name.
                    </div>
                </div>

                <div class="col-md-3 my-3">
                    <label for="validationCustom06" class="form-label">Gender</label>
                    <select class="form-select text-body-secondary" name="gender" id="validationCustom06" required>
                        <option selected disabled value="">Please Select</option>
                        <option value="FEMALE">FEMALE</option>
                        <option value="MALE">MALE</option>
                        <option value="OTHER">OTHER</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select one option.
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustom03" class="form-label">Contact</label>
                    <input type="tel" class="form-control text-body-secondary" id="validationCustom03" name="contact" placeholder="0900-000-0000" pattern="^09\d{9}$" maxlength="11" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a valid phone number in the format 09123456789.
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustomEmail" class="form-label">Email</label>
                    <input type="email" oninput="this.value = this.value.toUpperCase();" class="form-control text-body-secondary" id="validationCustomEmail" name="email" placeholder="example@example.com" maxlength="254" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustom06" class="form-label">Civil Status</label>
                    <select class="form-select text-body-secondary" id="Cvil_Status" name="civil_status" required>
                        <option selected disabled value="">Please Select</option>
                        <option value="SINGLE">SINGLE</option>
                        <option value="MARRIED">MARRIED</option>
                        <option value="DIVORCED">DIVORCED</option>
                        <option value="LEGALLY SEPARATED"> LEGALLY SEPARATED</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your address.
                    </div>
                </div>

                <div class="col-md-6 my-3">
                    <label for="inputAddress" name='address' class="form-label">Address</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control" name='address' id="validationCustom05" pattern="^(?!.$).+$" placeholder="1234 Main St" required>
                    <div class="form-text" id="basic-addon4">Street Address</div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your address.
                    </div>
                </div>
                <div class="col-md-2 my-3">
                    <label for="validationCustom02" class="form-label">City</label>
                    <input type="text" class="form-control text-body-secondary bg-secondary-subtle" name="city" maxlength="30" pattern="[A-Za-z\s\-]+" id="validationCustom02" value="MALABON" placeholder="MALABON" readonly>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter City.
                    </div>
                </div>
                <div class="col-md-2 my-3">
                    <label for="validationCustom06" class="form-label">Barangay</label>
                    <select class="form-select text-body-secondary" id="barangaySelect" name="barangay" required>
                        <option selected disabled value="">Please Select</option>
                        <option value="BARITAN">BARITAN</option>
                        <option value="BAYAN-BAYANAN">BAYAN-BAYANAN</option>
                        <option value="CATMON">CATMON</option>
                        <option value="CONCEPCION">CONCEPCION</option>
                        <option value="DAMPALIT">DAMPALIT</option>
                        <option value="FLORES">FLORES</option>
                        <option value="HULONG DUHAT">HULONG DUHAT</option>
                        <option value="IBABA">IBABA</option>
                        <option value="MAYSILO">MAYSILO</option>
                        <option value="MUZON">MUZON</option>
                        <option value="NIUGAN">NIUGAN</option>
                        <option value="PANGHULO">PANGHULO</option>
                        <option value="SAN AGUSTIN">SAN AGUSTIN</option>
                        <option value="SANTULAN">SANTULAN</option>
                        <option value="TAÑONG">TAÑONG</option>
                        <option value="ACACIA">ACACIA</option>
                        <option value="LONGOS">LONGOS</option>
                        <option value="POTRERO">POTRERO</option>
                        <option value="TINAJEROS">TINAJEROS</option>
                        <option value="TONSUYA">TONSUYA</option>
                        <option value="TUGATOG">TUGATOG</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select one option.
                    </div>
                </div>

                <div class="col-md-2 my-3">
                    <label for="validationCustom07" class="form-label">Zip</label>
                    <input type="text" class="form-control text-body-secondary bg-secondary-subtle" name="zip" id="zipCode" required readonly>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>

                <hr>
                <!--Appointment Form-->
                <h1 class="py-3"><strong>Appointment Form</strong></h1>

                <div class="col-md-7 my-3">
                    <label for="appointment-type" class="form-label">Procedure for Appointment:</label>
                    <select id="appointment-type" class="form-select" name="appointmentt" required>
                        <option selected disabled value="">Select a procedure</option>
                        <option value="CONSULTATION">CONSULTATION</option>
                        <option value="CHECK-UP">CHECK-UP</option>
                        <option value="FOLLOW-UP">FOLLOW-UP</option>
                        <option value="OTHER">OTHER (PLEASE SPECIFY)</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div id="other-procedure" style="display: none;">
                        <label for="other-procedure-text" class="form-label">Please specify the procedure:</label>
                        <input type="text" id="other-procedure-text" oninput="this.value = this.value.toUpperCase();" name="other_option" pattern="[A-Za-z\s\-]+" class="form-control">
                        <div class="invalid-feedback" id="other-procedure-feedback" style="display: none;">
                            Please specify the procedure.
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom09" class="form-label">Preferred Appointment Date</label>
                    <input type="date" class="form-control text-body-secondary" name="date" id="validationCustom09" required min="<?php echo date('Y-m-d'); ?>" onchange="updateTimeOptions()">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please select a date.
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom11" class="form-label">Preferred Time</label>
                    <div class="input-group">
                        <select class="form-select" id="TimeSelect" name="time" required>
                            <option value="" disabled selected>Time</option>
                            <option value="9:00">9:00</option>
                            <option value="11:00">11:00</option>
                            <option value="1:00">1:00</option>
                            <option value="3:00">3:00</option>
                            <option value="5:00">5:00</option>
                            <option value="7:00">7:00</option>
                        </select>
                        <input type="text" class="form-control text-body-secondary bg-secondary-subtle" id="TimeSelect2" name="time2" required readonly>

                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid option.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3 ">
                    <label for="validationCustom07" class="form-label">Name of the Clinic</label>
                    <input type="text" class="form-control text-body-secondary bg-secondary-subtle" id="clinicName" name="clinicName" required readonly>
                </div>
                <div class="col-md-6 my-3 ">
                    <label for="validationCustom07" class="form-label">Address of Clinic</label>
                    <input type="text" class="form-control text-body-secondary bg-secondary-subtle" id="clinicAddress" name="clinicAddress" required readonly>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustom01" class="form-label"><strong>REFERRAL CODE: (PLEASE REMEMBER)</strong></label>
                    <input type="text" oninput="this.value = this.value.toUpperCase();" class="form-control text-dark bg-primary-subtle" name='otp' id="otpInput" readonly>
                </div>
                <hr>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="form-text" id="basic-addon4"><a href="#">Terms and Conditions</a></div>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
            <!---Form end--->

        </div>
    </div>

    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        const appointmentTypeSelect = document.getElementById('appointment-type');
        const otherProcedureDiv = document.getElementById('other-procedure');

        appointmentTypeSelect.addEventListener('change', () => {
            if (appointmentTypeSelect.value === 'OTHER') {
                otherProcedureDiv.style.display = 'block';
            } else {
                otherProcedureDiv.style.display = 'none';
            }
        });

        const barangaySelect = document.getElementById('barangaySelect');
        const zipCodeInput = document.getElementById('zipCode');
        const clinicNameInput = document.getElementById('clinicName');
        const clinicAddressInput = document.getElementById('clinicAddress'); // New input for clinic address

        // Mapping of barangays to their corresponding ZIP codes and clinic addresses
        const barangayInfoMap = {
            "BARITAN": {
                zip: "1470",
                name: "Baritan Health Center",
                address: "50 Sta. Rita St. SRV Baritan 1470 Malabon, Philippines"
            },
            "BAYAN-BAYANAN": {
                zip: "1471",
                name: "Bayan Bayanan Health Center",
                address: "90 Celia I St, Malabon, 1471 Metro Manila"
            },
            "CATMON": {
                zip: "1472",
                name: "Catmon Super Health Center",
                address: "209 Sanciangco St, Malabon, NCR, PH."
            },
            "CONCEPCION": {
                zip: "1470",
                name: "PolyHealth Diagnostic and Laboratory Inc.",
                address: "2F Cenel Place, 239 Gen. Luna Cor. Burgos St. Concepcion 1470 Malabon, Philippines"
            },
            "DAMPALIT": {
                zip: "1470",
                name: "Dampalit Health Center",
                address: " Dona Juana Rodriguez-1, Barangay Dampalit, Malabon, 1470 Metro Manila"
            },
            "FLORES": {
                zip: "1475",
                name: "Flores Health Center",
                address: "Nueva St, Malabon, Metro Manila"
            },
            "HULONG DUHAT": {
                zip: "1470",
                name: "Hulong Duhat Health Center",
                address: "Don Basilio Bautista Blvd, Malabon, 1470 Metro Manila"
            },
            "IBABA": {
                zip: "1477",
                name: "Ibaba Health Center",
                address: "Tiangco St, Malabon, Philippines"
            },
            "MAYSILO": {
                zip: "1478",
                name: "Maysilo Health Center",
                address: "190 MHDP St Maysilo, Malabon, Philippines"
            },
            "MUZON": {
                zip: "1479",
                name: "Muzon Health Center ",
                address: " 1 karunungan st., Malabon, Philippines"
            },
            "NIUGAN": {
                zip: "1480",
                name: "Niugan Health Center ",
                address: "N. VICENCIO ST. BRGY NIUGAN, Malabon, Philippines"
            },
            "PANGHULO": {
                zip: "1471",
                name: "Panghulo Health Center",
                address: "247 Gen. Luna St, Malabon, 1471 Metro Manila"
            },
            "SAN AGUSTIN": {
                zip: "1482",
                name: " San Agustin Health Center",
                address: "72. S. Pascual st. San Agustin, Malabon, Philippines"
            },
            "SANTULAN": {
                zip: "1483",
                name: "Santulan Health Center",
                address: "26-36, M Santos St, Malabon, Metro Manila"
            },
            "TAÑONG": {
                zip: "1484",
                name: "Tañong Health Center",
                address: "MX33+Q2C, Malabon, Metro Manila"
            },
            "ACACIA": {
                zip: "1474",
                name: "Acacia Health Center",
                address: "Ma. Clara Street Acacia 1474 Malabon, Philippines"
            },
            "LONGOS": {
                zip: "1486",
                name: "Longos Super Health Center",
                address: "66 Hito St, Manila, Metro Manila"
            },
            "POTRERO": {
                zip: "1470",
                name: " Potrero Super Health Center",
                address: "Durian Rd, Malabon, 1470 Metro Manila"
            },
            "TINAJEROS": {
                zip: "1488",
                name: "Tinajeros HC",
                address: "Crispin Street, Barangay Tinajeros, Malabon City, Metro Manila, Philippines"
            },
            "TONSUYA": {
                zip: "1489",
                name: "Tonsuya Super Health Center",
                address: "Villanueva St. Flovihomes Samatom Mendiola St. Damata"
            },
            "TUGATOG": {
                zip: "1470",
                name: "Tugatog Health Center ",
                address: "Prosperidad St, Malabon, 1470 Metro Manila"
            }
        };

        barangaySelect.addEventListener('change', () => {
            const selectedBarangay = barangaySelect.value;
            const info = barangayInfoMap[selectedBarangay] || {
                zip: '',
                name: '',
                address: ''
            }; // Get info or default to empty

            zipCodeInput.value = info.zip; // Set ZIP code
            clinicNameInput.value = info.name;
            clinicAddressInput.value = info.address; // Set clinic address
        });

        const TimeMap = document.getElementById('TimeSelect');
        const TimeInput = document.getElementById('TimeSelect2');

        const TimeSelectMap = {
            "9:00": "AM",
            "11:00": "AM",
            "1:00": "PM",
            "3:00": "PM",
            "5:00": "PM",
            "7:00": "PM",
        }

        TimeMap.addEventListener('change', () => {
            const selectedBarangay = TimeMap.value;
            TimeInput.value = TimeSelectMap[selectedBarangay] || ''; // Set ZIP code or clear if not found
        });


        const appointmentTypeSelect1 = document.getElementById('appointment-type');
        const otherProcedureDiv1 = document.getElementById('other-procedure');
        const otherProcedureInput = document.getElementById('other-procedure-text');
        const otherProcedureFeedback = document.getElementById('other-procedure-feedback');

        appointmentTypeSelect1.addEventListener('change', function() {
            if (this.value === 'OTHER') {
                otherProcedureDiv.style.display = 'block';
                otherProcedureInput.required = true; // Make the input required
            } else {
                otherProcedureDiv1.style.display = 'none';
                otherProcedureInput.required = false; // Remove required if not 'other'
                otherProcedureInput.value = ''; // Clear the input
                otherProcedureFeedback.style.display = 'none'; // Hide feedback
            }
        });

        // Form submission handler
        document.querySelector('form').addEventListener('submit', function(event) {
            if (appointmentTypeSelect.value === 'OTHER' && otherProcedureInput.value.trim() === '') {
                event.preventDefault(); // Prevent form submission
                otherProcedureFeedback.style.display = 'block'; // Show feedback
                otherProcedureInput.classList.add('is-invalid'); // Add invalid class for styling
            } else {
                otherProcedureFeedback.style.display = 'none'; // Hide feedback
                otherProcedureInput.classList.remove('is-invalid'); // Remove invalid class
            }
        });

        function updateTimeOptions() {
            const dateInput = document.getElementById('validationCustom09');
            const timeSelect = document.getElementById('TimeSelect');
            const selectedDate = new Date(dateInput.value);
            const today = new Date();

            // Reset the time select options
            timeSelect.selectedIndex = 0; // Reset to "Time" option
            const timeOptions = ['9:00', '11:00', '1:00', '3:00', '5:00', '7:00'];

            // Clear existing options
            while (timeSelect.options.length > 1) {
                timeSelect.remove(1);
            }

            // Add time options based on the selected date
            timeOptions.forEach(time => {
                const [hour, minute] = time.split(':');
                const timeDate = new Date(selectedDate);
                timeDate.setHours(hour);
                timeDate.setMinutes(minute);

                // If the selected date is today, check if the time is in the future
                if (selectedDate.toDateString() === today.toDateString()) {
                    if (timeDate > today) {
                        const option = new Option(time, time);
                        timeSelect.add(option);
                    }
                } else {
                    // If the selected date is in the future, add all time options
                    const option = new Option(time, time);
                    timeSelect.add(option);
                }
            });
        }
        function generateRandomAlphanumeric(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';

            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                result += characters[randomIndex];
            }

            return result;
        }
        const randomString = generateRandomAlphanumeric(6);
        document.getElementById('otpInput').value = randomString;
    </script>
</body>

</html>

<?php
include("footer.html");
?>
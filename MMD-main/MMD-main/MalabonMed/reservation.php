<?php
include("header.html");
?>


<?php
$error = '';
$fn = '';
$ln = '';
$gender = '';
$contact = '';
$email = '';
$barangay = '';
$procedure = '';
$datetime = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripcslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fn = $_POST['fn'];
    $ls = $_POST['ls'];
    $md = $_POST['mn'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $civil_status = $_POST['civil_status'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];
    $appointmentt = $_POST['appointmentt'];
    $other_option = $_POST['other_option'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $time2 = $_POST['time2'];

    echo $fn."\n";
    echo $ls."\n";
    echo $md."\n";
    echo $gender."\n";
    echo $contact."\n";
    echo $email."\n";
    echo $civil_status."\n";
    echo $city."\n";
    echo $barangay."\n";
    echo $appointmentt."\n";
    echo $other_option."\n";
    echo $date."\n";
    echo $time;
    echo $time2;
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
                    <input type="text" class="form-control text-body-secondary" name="fn" id="validationCustom01" maxlength="30" pattern="[A-Za-z\s\-]+" placeholder="John" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a first name.
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control text-body-secondary" name="ls" maxlength="30" pattern="[A-Za-z\s\-]+" id="validationCustom02" placeholder="Doe" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter last name.
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom02" class="form-label">Middle name</label>
                    <input type="text" class="form-control text-body-secondary" name="mn" maxlength="30" pattern="[A-Za-z\s\-]+" id="validationCustom02" placeholder="Bloggs" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter middle name.
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom06" class="form-label">Gender</label>
                    <select class="form-select text-body-secondary" name="gender" id="validationCustom06" required>
                        <option selected disabled value="">Please Select</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select one option.
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustom03" class="form-label">Contact</label>
                    <input type="tel" class="form-control text-body-secondary" id="validationCustom03" name="contact" placeholder="+0900-000-0000" pattern="\+09\d{9}$" maxlength="12" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a valid phone number in the format +09123456789.
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustomEmail" class="form-label">Email</label>
                    <input type="email" class="form-control text-body-secondary" id="validationCustomEmail" name="email" placeholder="example@example.com" maxlength="254" required>
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
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="LS"> Legally Separated</option>
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
                    <input type="text" class="form-control" id="validationCustom05" placeholder="1234 Main St" required>
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
                    <input type="text" class="form-control text-body-secondary bg-secondary-subtle" name="city" maxlength="30" pattern="[A-Za-z\s\-]+" id="validationCustom02" placeholder="Malabon" readonly>
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
                        <option value="Baritan">Baritan</option>
                        <option value="Bayan-bayanan">Bayan-bayanan</option>
                        <option value="Catmon">Catmon</option>
                        <option value="Concepcion">Concepcion</option>
                        <option value="Dampalit">Dampalit</option>
                        <option value="Flores">Flores</option>
                        <option value="Hulong Duhat">Hulong Duhat</option>
                        <option value="Ibaba">Ibaba</option>
                        <option value="Maysilo">Maysilo</option>
                        <option value="Muzon">Muzon</option>
                        <option value="Niugan">Niugan</option>
                        <option value="Panghulo">Panghulo</option>
                        <option value="San Agustin">San Agustin</option>
                        <option value="Santulan">Santulan</option>
                        <option value="Tañong">Tañong</option>
                        <option value="Acacia">Acacia</option>
                        <option value="Longos">Longos</option>
                        <option value="Potrero">Potrero</option>
                        <option value="Tinajeros">Tinajeros</option>
                        <option value="Tonsuya">Tonsuya</option>
                        <option value="Tugatog">Tugatog</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select one option.
                    </div>
                </div>

                <div class="col-md-2 my-3">
                    <label for="validationCustom07" class="form-label">Zip</label>
                    <input type="text" class="form-control text-body-secondary bg-secondary-subtle" id="zipCode" required readonly>
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
                        <option value="consultation">Consultation</option>
                        <option value="check-up">Check-up</option>
                        <option value="follow-up">Follow-up</option>
                        <option value="other">Other (please specify)</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div id="other-procedure" style="display: none;">
                        <label for="other-procedure-text" class="form-label">Please specify the procedure:</label>
                        <input type="text" id="other-procedure-text" name="other_option"  pattern="[A-Za-z\s\-]+" class="form-control">
                        <div class="invalid-feedback" id="other-procedure-feedback" style="display: none;">
                            Please specify the procedure.
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom09" class="form-label">Preferred Appointment Date</label>
                    <input type="date" class="form-control text-body-secondary" name="date" id="validationCustom09" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please select date.
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
            if (appointmentTypeSelect.value === 'other') {
                otherProcedureDiv.style.display = 'block';
            } else {
                otherProcedureDiv.style.display = 'none';
            }
        });

        const barangaySelect = document.getElementById('barangaySelect');
        const zipCodeInput = document.getElementById('zipCode');

        // Mapping of barangays to their corresponding ZIP codes
        const barangayZipMap = {
            "Baritan": "1470",
            "Bayan-bayanan": "1471",
            "Catmon": "1472",
            "Concepcion": "1473",
            "Dampalit": "1474",
            "Flores": "1475",
            "Hulong Duhat": "1476",
            "Ibaba": "1477",
            "Maysilo": "1478",
            "Muzon": "1479",
            "Niugan": "1480",
            "Panghulo": "1481",
            "San Agustin": "1482",
            "Santulan": "1483",
            "Tañong": "1484",
            "Acacia": "1485",
            "Longos": "1486",
            "Potrero": "1487",
            "Tinajeros": "1488",
            "Tonsuya": "1489",
            "Tugatog": "1490"
        };

        barangaySelect.addEventListener('change', () => {
            const selectedBarangay = barangaySelect.value;
            zipCodeInput.value = barangayZipMap[selectedBarangay] || ''; // Set ZIP code or clear if not found
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
            if (this.value === 'other') {
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
            if (appointmentTypeSelect.value === 'other' && otherProcedureInput.value.trim() === '') {
                event.preventDefault(); // Prevent form submission
                otherProcedureFeedback.style.display = 'block'; // Show feedback
                otherProcedureInput.classList.add('is-invalid'); // Add invalid class for styling
            } else {
                otherProcedureFeedback.style.display = 'none'; // Hide feedback
                otherProcedureInput.classList.remove('is-invalid'); // Remove invalid class
            }
        });
    </script>
</body>

</html>

<?php
include("footer.html");
?>
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
    $gender = $_POST['gender'];
    echo $gender;
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
                <div class="col-md-4 my-3">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control text-body-secondary" name="fn" id="validationCustom01" placeholder="Setbsaian" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a first name.
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control text-body-secondary" name="ls" id="validationCustom02" placeholder="You" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter last name.
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustom06" class="form-label">Gender</label>
                    <select class="form-select text-body-secondary" name="gender" id="validationCustom06" required>
                        <option selected disabled value="">Please Select</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select one option.
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <label for="validationCustom03" name='contact' class="form-label">Contact</label>
                    <input type="number" class="form-control text-body-secondary" id="validationCustom03" placeholder="(000)-000-0000" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter valid input.
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <label for="validationCustom04" name='email' class="form-label">Email</label>
                    <input type="text" class="form-control text-body-secondary" id="validationCustom04" placeholder="bas@gmail.com" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a valid email.
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <label for="inputAddress" name='address' class="form-label">Address</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="1234 Main St" required>
                    <div class="form-text" id="basic-addon4">Street Address</div>
                    <div class="invalid-feedback">
                        Please enter your address.
                    </div>
                </div>
                <div class="col-md-3 my-3">
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

                <div class="col-md-3 my-3">
                    <label for="validationCustom07" class="form-label">Zip</label>
                    <input type="text" class="form-control text-body-secondary" id="zipCode" required readonly>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <hr>
                <h1 class="py-3"><strong>Appointment Form</strong></h1>

                <div class="col-md-6 my-3">
                    <label for="appointment-type" name='procedure' class="form-label">Which procedure do you want to make an appointment for?</label>
                    <select id="appointment-type" class="form-select" required>
                        <option value="">Select a procedure</option>
                        <option value="consultation">Consultation</option>
                        <option value="check-up">Check-up</option>
                        <option value="surgery">Surgery</option>
                        <option value="test-or-exam">Test or Exam</option>
                        <option value="follow-up">Follow-up</option>
                        <option value="other">Other (please specify)</option>
                    </select>
                    <div id="other-procedure" style="display: none;">
                        <label for="other-procedure-text" class="form-label">Please specify the procedure:</label>
                        <input type="text" id="other-procedure-text" class="form-control">
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please select a procedure.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom09" name="datetime" class="form-label">Preferred Appointment Date and Time</label>
                    <input type="datetime-local" class="form-control text-body-secondary" id="validationCustom09" placeholder="Select DateTime" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please select date and time.
                    </div>
                </div>

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
    </script>

    <script>
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
    </script>
</body>

</html>

<?php
include("footer.html");
?>
<?php
include("header.html");
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
    <div class="container-fluid my-5">
        <div class="container-md py-5">
            <h1><strong>Reservation Form</strong></h1>
            <p class="card-text text-body-secondary">
                Convenient Appointment Scheduling for Malabon Barangay Clinics! Reserve your spot easily and ensure timely medical care with MalabonMed.
            </p>
        </div>
        <!--Form Start-->
        <div class="container-md rounded-3 border p-5 shadow-sm">
        <h1 class="py-3"><strong>Personal Information</strong></h1>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4 my-3">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control text-body-secondary" id="validationCustom01" placeholder="Setbsaian" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control text-body-secondary" id="validationCustom02" placeholder="You" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control text-body-secondary" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <label for="validationCustom01" class="form-label">Contact</label>
                    <input type="text" class="form-control text-body-secondary" id="validationCustom01" placeholder="09" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <label for="validationCustom02" class="form-label">Email</label>
                    <input type="text" class="form-control text-body-secondary" id="validationCustom02" placeholder="bas@gmail.com" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="1234 Main St" required>
                    <div class="form-text" id="basic-addon4">Street Address</div>
                    <div class="invalid-feedback">
                        Please add an address.
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom04" class="form-label">Barangay</label>
                    <select class="form-select text-body-secondary" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Baritan</option>
                        <option>Bayan-bayanan</option>
                        <option>Catmon</option>
                        <option>Concepcion</option>
                        <option>Dampalit</option>
                        <option>Flores</option>
                        <option>Hulong Duhat</option>
                        <option>Ibaba</option>
                        <option>Maysilo</option>
                        <option>Muzon</option>
                        <option>Niugan</option>
                        <option>Panghulo</option>
                        <option>San Agustin</option>
                        <option>Santulan</option>
                        <option>Tañong</option>
                        <option>Acacia</option>
                        <option>Longos</option>
                        <option>Potrero</option>
                        <option>Tinajeros</option>
                        <option>Tonsuya</option>
                        <option>Tugatog</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <input type="text" class="form-control text-body-secondary" id="validationCustom05" required readonly>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <hr>
                <h1 class="py-3"><strong>Appointment Form</strong></h1>
                
                <div class="col-md-3 my-3">
                    <label for="validationCustom04" class="form-label">Purpose</label>
                    <select class="form-select text-body-secondary" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>May cancer</option>
                        <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                    </select>
                </div>


                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
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
    </script>
</body>

</html>

<?php
include("footer.html");
?>
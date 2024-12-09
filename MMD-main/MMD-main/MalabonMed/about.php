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
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-md rounded-5 ps-5" id="about">
            <!--Image Start-->
            <div class=" py-5 mb-5">
                <h1 class="title_4">
                    Know More About Us!
                </h1>
                <p>Discover our journey, values, and commitment to excellence.</p>

            </div>
            <!--Image End-->
        </div>
        </div>
    <div class="container-fluid">
        <!--About Start--->
        <div class="container-md ">
            <h2 class="title_2 ">About MalabonMed</h2>
            <p class="card-text text-body-secondary">
                MalabonMed is dedicated to enhancing community health by providing a user-friendly platform that allows residents to easily schedule appointments at their local barangay clinics.</p>
            <div class="row">
                <div class="col p-5 d-flex">
                    <img src="assets/environment.png" class="img-fluid" style="max-width: 80px; min-width:50px">
                    <div class="container-md">
                        <b style="font-size: 1.5rem;">Convenience</b>
                        <p class="card-text text-body-secondary">Platform for residents to easily schedule appointments at their local barangay clinics.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col p-5 d-flex">
                    <img src="assets/task-management.png" class="img-fluid" style="max-width: 80px; min-width:50px">
                    <div class="container-md">
                        <b style="font-size: 1.5rem;">Management</b>
                        <p class="card-text text-body-secondary"> Helps barangay clinics manage their schedules more efficiently.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col p-5 d-flex">
                    <img src="assets/info.png" class="img-fluid" style="max-width: 80px; min-width:50px">
                    <div class="container-md">
                        <b style="font-size: 1.5rem;">Information</b>
                        <p class="card-text text-body-secondary">Contribute to a healthier community and encourage health management.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--About End--->
    </div>
    <div class="container-fluid" id="about">
        <div class="container-md">
            <!--Image Start-->
            <div class=" py-5 mb-5">
            </div>
            <!--Image End-->
        </div>
    </div>
    <!--Misson Start--->
    <div class="container-md">
        <h2 class="title_2 ">Our Mission</h2>
        <p class="card-text text-body-secondary">
            To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:</p>
        <div class="row">
            <div class="col p-5 d-flex">
                <img src="assets/x2.png" class="img-fluid">
                <div class="container-md">
                    <b style="font-size: 1.5rem;">Students</b>
                    <p class="card-text text-body-secondary">Learn in a child-friendly, gender-sensitive, safe, and motivating environment.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col p-5 d-flex">
                <img src="assets/x1.png" class="img-fluid">
                <div class="container-md">
                    <b style="font-size: 1.5rem;">Teachers</b>
                    <p class="card-text text-body-secondary"> Facilitate learning and constantly nurture every learner.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col p-5 d-flex">
                <img src="assets/x3.png" class="img-fluid">
                <div class="container-md">
                    <b style="font-size: 1.5rem;">Administrators and staff</b>
                    <p class="card-text text-body-secondary">As stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col p-5 d-flex">
                <img src="assets/x4.png" class="img-fluid">
                <div class="container-md">
                    <b style="font-size: 1.5rem;">Family, community, and other stakeholders</b>
                    <p class="card-text text-body-secondary">Actively engaged and share responsibility for developing life-long learners.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Mission End--->
    <!--Vision Start--->
    <div class="container-md my-5">
        <h2 class="title_2 ">Our Vision</h2>
        <div class="row">
            <div class="col-6 p-5 d-flex">
                <p class="card-text text-body">
                    We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potential and contribute meaningfully to building the nation.</p>
                
            </div>
            <div class="col-6 p-5 d-flex">
                <p class="card-text text-body-secondary">
                    As a learner-centered public institution, the Department of Education continuously improves itself to better serve its stakeholders.</p>
            </div>
        </div>
    </div>


    </div>
    <!--Vision End--->

    </div>
</body>

</html>
<?php
include("footer.html");
?>
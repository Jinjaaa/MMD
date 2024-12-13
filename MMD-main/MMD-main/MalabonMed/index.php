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
    agentId: 'cm4mur5r90a8pppjjqvlyqkwf',
    
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
    <div class="container-fluid pb-5 ">
        
        <div class="container-md">
            <!--Blue Heading Start-->
            <div class="carousel radius-5 container-fluid p-5 bg-warning rounded-5 shadow mb-5">
                <div class="container-md" id="home">
                    <h1 class="title_1">
                        Convenient Appointment<br>
                        Scheduling for Malabon<br>
                        Barangay Clinics!<br>
                    </h1>
                    <p>Reserve Your Spot with MalabonMed</p>
                    <a href='reservation.php'  type="button" class="btn btn1 btn-info shadow ">Reserve Now
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg></a>
                    <div class="container text-center pt-5">
                        <div class="row">
                            <div class="col">
                                21<br>
                                Malabon Barangays
                            </div>
                            <div class="col">
                                1.5k<br>
                                Good Reviews
                            </div>
                            <div class="col">
                                2.5k<br>
                                User Coming Back
                            </div>
                            <div class="col">
                                90%<br>Feedback From User
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blue Heading End-->
            <!--Appointment Start-->
            <div class="container-fluid  py-5 ">
                <div class="container-md">
                    <div class="appointment  radius-5 container-fluid rounded-5  mb-5">
                        <div class="container-md text-center">
                            <h2 class="title_2">
                                Appointment Features
                            </h2>
                            <p style="color: rgb(37, 37, 103);" class="opacity-75">Streamline scheduling with seamless appointment management for better productivity and convenience.</p>
                            <div class="container text-center pt-5">
                                <div class="row">
                                    <div class="col p-5 bg-primary bg-opacity-25 shadow rounded-2 m-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                        </svg><br>
                                        <b>Selection of Service</b><br>
                                        Allow users to choose the type of service
                                    </div>
                                    <div class="col p-5 bg-danger bg-opacity-25 shadow  rounded-2 m-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                        </svg><br>
                                        <b>Email Verification</b><br>
                                        Verify user accounts by sending an email containing a unique referral code
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col p-5 bg-info bg-opacity-25 shadow  rounded-2 m-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                        </svg><br>
                                        <b>Appointment Selection</b><br>
                                        Users can select their preferred date and time.
                                    </div>
                                    <div class="col p-5 bg-warning bg-opacity-50 shadow  rounded-2 m-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                        </svg><br>
                                        <b>Save to PDF File</b><br>
                                        Allow user to easily save your completed form as a PDF file, ensuring you have a convenient and accessible copy to present during your visit.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--Appointment End-->

            <!--News Start-->
            <div class="container-md ">
                <div class="about container-md py-5">
                    <h2 class="title_2 text-center">
                        See The Latest News
                    </h2>
                    <p style="color: rgb(37, 37, 103);" class="opacity-75 text-center">Stay Updated with Breaking Stories and Trending Headlines.</p>
                </div>
                <div class="card-group">
                    <div class="card ">
                        <img src="assets/n1.jpg" class="card-img-top " alt="...">
                        <div class="card-body"><a href="https://web.facebook.com/photo/?fbid=475143325269757&set=a.126499470134146">
                                <h5 class="card-title">BABALA SA LEPTOSPIROSIS</h5>
                                <p class="card-text text-dark text-opacity-75">Huwag mag-atubiling bumisita sa MHMC para sa agarang konsultasyon at pag-gamot. Ang kalusugan mo ay mahalaga, magpa-konsulta na!!</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 1 week ago</small></p>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/n2.jpg" class="card-img-top" alt="...">
                        <div class="card-body"><a href="https://web.facebook.com/MHMC.Official/posts/pfbid02993S1RXE15xHv9YUH7BhgRqD1Sgty359W1M6yGdtDgzRzv6urMgHs1msyM9b1LLil">
                                <h5 class="card-title">WE ARE HIRING</h5>
                                <p class="card-text text-dark text-opacity-75">We are hiring! Submit your resume to humanresource@mhmc.com.ph or scan the QR code below!</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 6 days ago</small></p>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/n3.jpg" class="card-img-top" alt="...">
                        <div class="card-body"><a href="https://web.facebook.com/MHMC.Official/posts/pfbid01JBafJJxwCuCBeEUuvw3hxMiXDCMtQ2NMZC454S5PzqCdTBdRh6otEbHANRp8WWvl">
                                <h5 class="card-title">Be a Lifesaver, Donate Blood!</h5>
                                <p class="card-text text-dark text-opacity-75">Sa darating na December 14, 2024 (Sabado) magsasagawa ang Malabon Hospital and Medical Center katuwang ang Philippine Red Cross Malabon Chapte</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 5 days ago</small></p>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="text-center py-5">
                    <a class="icon-link icon-link-hover" href="news.php">See More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </a>
                </p>
            </div>
            <!--News End-->
        </div>
    </div>
    <!---Feedback Start--->
    <div class="poly container-fluid ">
        <div class="container-md ">
            <div class="about container-md py-5">
                <h2 class="title_3 text-center ">
                    Hear The Love From Malabon
                </h2>
                <p style="color: rgb(247, 248, 248);" class=" text-center mb-5">Spreading warmth and connection from the heart of Malabon.</p>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item shadow">
                        <h2 class="accordion-header">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Feedback #1
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <strong>Sebastian Y.</strong>&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><br>
                                <p class="card-text"><small class="text-body-secondary ">Barangay Niugan</small></p>
                                I absolutely love how easy it is to navigate your website! Everything is well-organized, and I found what I was looking for in no time. Great job on the user experience!
                                <p class="card-text"><small class="text-body-secondary ">2 days ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="1" aria-controls="panelsStayOpen-collapseTwo">
                                Feedback #2
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <strong>Kurt R.</strong>&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><br>
                                <p class="card-text"><small class="text-body-secondary ">Barangay Niugan</small></p>
                                The design of your website is stunning! The color palette is vibrant and inviting, and the layout is very modern. It really makes browsing enjoyable. Keep up the fantastic work!
                                <p class="card-text"><small class="text-body-secondary ">5 days ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Feedback #3
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>Kuya Gary</strong>&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d49e0b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><br>
                                <p class="card-text"><small class="text-body-secondary ">Barangay Niugan</small></p>
                                I really appreciate the quality of the content on your site! The articles are insightful and engaging, and I always learn something new when I visit. It's clear that a lot of effort goes into creating valuable resources for users.
                                <p class="card-text"><small class="text-body-secondary ">2 days ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center py-5">
                    <a class="icon-link1 icon-link icon-link-hover " href="feedback.php">See More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!---Feedback End--->
    <!--About start---->
    <div class="container-fluid my-5 ">
        <div class=" container-md  text-center my-5">
            <h2 class="title_2 text-center pt-5">
                Know More About Us
            </h2>
            <p class="text-center opacity-75" style="color: rgb(37, 37, 103);">Discover our journey, values, and commitment to excellence.</p>
            <div class="container text-center py-5 mb-5">
                <div class="row ">
                    <div class="col p-5 bg-primary bg-opacity-25 shadow rounded-2 m-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                            <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                        </svg><br>
                        <b>Convenience</b><br>
                        Platform for residents to easily schedule appointments at their local barangay clinics.
                    </div>
                    <div class="col p-5 bg-success bg-opacity-25 shadow  rounded-2 m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg><br>
                        <b>Management</b><br>
                        Helps barangay clinics manage their schedules more efficiently.
                    </div>
                    <div class="col p-5 bg-primary bg-opacity-25 shadow  rounded-2 m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bandaid" viewBox="0 0 16 16">
                            <path d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242M12.293 8 8.027 3.734 3.738 8.031 8 12.293zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492z" />
                            <path d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707M8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707" />
                        </svg><br>
                        <b>Information</b><br>
                        Contribute to a healthier community and encourage health management.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---About end---->
</body>

</html>
<?php
include("footer.html");
?>
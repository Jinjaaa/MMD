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
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-md rounded-5 ps-5" id="about">
            <!--Image Start-->
            <div class=" py-5 mb-5">
                <h1 class="title_4">
                    CONTACT
                </h1>
                <p>Contact our dedicated emergency hotline for prompt response and support.</p>

            </div>
            <!--Image End-->
        </div>
    </div>
    <div class="container-fluid">
        <!--About Start--->
        <div class="container-md ">
            <h2 class="title_2 ">Emergency Hotlines</h2>
            <p class="card-text text-body-secondary">

                <!---copy me start--->
            <div class="row">
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <img src="assets/redcross.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                    <div class="container-md d-flex align-items-center">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">Philippine Red Cross</b>
                            <p class="card-text text-body-secondary">143 | (02) 8527-8385 to 95</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <img src="assets/dswd.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                    <div class="container-md  d-flex align-items-center">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">DSWD</b>
                            <p class="card-text text-body-secondary">(02) 8931-8101 to 70</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <img src="assets/bfp.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                    <div class="container-md d-flex align-items-center">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">Bureau Of Fire Protection</b>
                            <p class="card-text text-body-secondary">(02) 8426-0219 <br>(02) 8426-0246 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <img src="assets/pnp.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                    <div class="container-md  d-flex align-items-center">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">Philippine National Police</b>
                            <p class="card-text text-body-secondary">117 | (02) 8722-0650</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <img src="assets/ndrrmc.png" class="img-fluid" style="max-width: 90px; height: 80px;">
                    <div class="container-md d-flex align-items-center">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">NDRRMC</b>
                            <p class="card-text text-body-secondary">(02) 8911-5061 to 65, loc 100</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <img src="assets/pagasa.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                    <div class="container-md  d-flex align-items-center">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">PAGASA</b>
                            <p class="card-text text-body-secondary">8027-1541</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <img src="assets/pcg.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                    <div class="container-md d-flex align-items-center">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">Philippine Coast Guard</b>
                            <p class="card-text text-body-secondary">(02) 8527-3877</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 d-flex align-items-center">
                    <img src="assets/dswd.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                    <div class="container-md  d-flex align-items-center">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">DSWD</b>
                            <p class="card-text text-body-secondary">(02) 8931-8101 to 70</p>
                        </div>
                    </div>
                </div>






                <!---National Contact Numbers-->
                <hr class="my-5">
                <h2 class="title_2 ">National Contact Numbers</h2>
                <p class="card-text text-body-secondary">
                <div class="row">
                    <div class="col-md-6 p-5 d-flex align-items-center">
                        <img src="assets/911.png" class="img-fluid" style="max-width: 80px; min-width:50px">
                        <div class="container-md">
                            <b style="font-size: 1.5rem;">National Emergency Hotline</b>
                            <p class="card-text text-body-secondary">(+63) 911</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-5 d-flex align-items-center">
                        <img src="assets/dpwh.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                        <div class="container-md  d-flex align-items-center">
                            <div class="container-md">
                                <b style="font-size: 1.5rem;">DPWH</b>
                                <p class="card-text text-body-secondary">165-02</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="card-text text-body-secondary">
             
                    <div class="col-md-6 p-5 d-flex align-items-center">
                        <img src="assets/pagasa.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                        <div class="container-md  d-flex align-items-center">
                            <div class="container-md">
                                <b style="font-size: 1.5rem;">PAGASA</b>
                                <p class="card-text text-body-secondary">8027-1541</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-5 d-flex align-items-center">
                        <img src="assets/dswd.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                        <div class="container-md  d-flex align-items-center">
                            <div class="container-md">
                                <b style="font-size: 1.5rem;">DSWD</b>
                                <p class="card-text text-body-secondary">(02) 8931-8101 to 70</p>
                            </div>
                        </div>
                    </div>
                    <p class="card-text text-body-secondary">
                 
                        <div class="col-md-6 p-5 d-flex align-items-center">
                            <img src="assets/phiv.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                            <div class="container-md  d-flex align-items-center">
                                <div class="container-md">
                                    <b style="font-size: 1.5rem;">PHIVOLCS</b>
                                    <p class="card-text text-body-secondary">(02) 426-1468 to 79</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-5 d-flex align-items-center">
                            <img src="assets/redcross.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                            <div class="container-md d-flex align-items-center">
                                <div class="container-md">
                                    <b style="font-size: 1.5rem;">Philippine Red Cross</b>
                                    <p class="card-text text-body-secondary">143 | (02) 8527-8385 to 95</p>
                                </div>
                            </div>
                        </div>
                        
                            <div class="col-md-6 p-5 d-flex align-items-center">
                                <img src="assets/ndrrmc.png" class="img-fluid" style="max-width: 90px; height: 80px;">
                                <div class="container-md d-flex align-items-center">
                                    <div class="container-md">
                                        <b style="font-size: 1.5rem;">NDRRMC</b>
                                        <p class="card-text text-body-secondary">(02) 8911-5061 to 65, loc 100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-5 d-flex align-items-center">
                                <img src="assets/pnp.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                                <div class="container-md  d-flex align-items-center">
                                    <div class="container-md">
                                        <b style="font-size: 1.5rem;">Philippine National Police</b>
                                        <p class="card-text text-body-secondary">117 | (02) 8722-0650</p>
                                    </div>
                                </div>
                            </div>
                         
                                <div class="col-md-6 p-5 d-flex align-items-center">
                                    <img src="assets/bfp.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                                    <div class="container-md d-flex align-items-center">
                                        <div class="container-md">
                                            <b style="font-size: 1.5rem;">Bureau Of Fire Protection</b>
                                            <p class="card-text text-body-secondary">(02) 8426-0219 <br>(02) 8426-0246 </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-5 d-flex align-items-center">
                                    <img src="assets/mmda.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                                    <div class="container-md  d-flex align-items-center">
                                        <div class="container-md">
                                            <b style="font-size: 1.5rem;">MMDA</b>
                                            <p class="card-text text-body-secondary">(02) 136</p>
                                        </div>
                                    </div>
                                </div>




                                <!---copy me end--->

                                <!---National Contact Numbers-->
                                <hr class="my-5">
                                <h2 class="title_2 ">Municipal Contact Number</h2>
                                <p class="card-text text-body-secondary">
                                    <!---copy me start--->
                                <div class="row">
                                    <div class="col-md-6 p-5 d-flex align-items-center">
                                        <img src="assets/mayor.png" class="img-fluid" style="max-width: 80px; min-width:50px">
                                        <div class="container-md">
                                            <b style="font-size: 1.5rem;">Mayor’s Office</b>
                                            <p class="card-text text-body-secondary">(02) 8281-4999</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-5 d-flex align-items-center">
                                        <img src="assets/redcross.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                                        <div class="container-md d-flex align-items-center">
                                            <div class="container-md">
                                                <b style="font-size: 1.5rem;">Philippine Red Cross (Local)</b>
                                                <p class="card-text text-body-secondary">(02) 8366 6470 </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 p-5 d-flex align-items-center">
                                        <img src="assets/pnp.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                                        <div class="container-md  d-flex align-items-center">
                                            <div class="container-md">
                                                <b style="font-size: 1.5rem;">Philippine National Police (Local)</b>
                                                <p class="card-text text-body-secondary">(+63) 998 589 7864</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-5 d-flex align-items-center">
                                        <img src="assets/bfp.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                                        <div class="container-md d-flex align-items-center">
                                            <div class="container-md">
                                                <b style="font-size: 1.5rem;">Bureau Of Fire Protection (Local)</b>
                                                <p class="card-text text-body-secondary">(02) 8292 7339</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-5 d-flex align-items-center">
                                        <img src="assets/mmda.png" class="img-fluid" style="max-width: 500px; height: 80px;">
                                        <div class="container-md  d-flex align-items-center">
                                            <div class="container-md">
                                                <b style="font-size: 1.5rem;">MMDA</b>
                                                <p class="card-text text-body-secondary">(+63) 090 651 29676 </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!---copy me end--->
                        </div>

                    </div>
</body>

</html>
<?php
include("footer.html");
?>
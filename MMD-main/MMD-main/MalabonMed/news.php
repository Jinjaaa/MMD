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
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-md rounded-5 ps-5" id="about">
            <!--Image Start-->
            <div class="py-5 mb-5">
                <h1 class="title_4">
                    NEWS
                </h1>
                <p>Stay Informed, Stay Ahead.</p>
            </div>
            <!--Image End-->
        </div>
    </div>
    <div class="container-fluid">
        <!--news Start--->
        <div class="container-md my-5 ">

            <h2 class="title_2 my-5 ">Updates On Health Programs</h2>
            <p class="card-text text-body-secondary">
            </p>
            <div class="container-fluid  pb-5 d-flex justify-content-center ">
                <div class="row container-md pb-5 d-flex justify-content-center  border-bottom border-2">
                    <div class="col-4 ">
                        <nav id="navbar-example3 " class=" h-100 flex-column align-items-stretch pe-4 pt-4   border-end">
                            <nav class="nav nav-pills flex-column " id="nav_hover" style="position: sticky; top: 20%; z-index: 1000;">
                                <h2><strong>Malabon Health News: </strong></h2>
                                <hr>
                                <a class="nav-link " href="#item-1">Rehabilitated Catmon Super Health Center</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1" href="#item-1-1">Project para sa Catmon Super Health Center!</a>
                                </nav>
                                <a class="nav-link" href="#item-2">OSPITAL NG MALABON</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1" href="#item-2-1">Nakatanggap ang Ospital ng Malabon (OsMal) ng mataas na rating na 93%</a>
                                </nav>
                                <a class="nav-link" href="#item-3">LIBRENG GAMOT</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1" href="#item-3-1">2,076,000 na piraso ng gamot para sa 268,676 na residente ng Malabon.</a>
                                </nav>
                            </nav>

                        </nav>
                    </div>
                    <div class="col-8 pt-4">
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                            <div id="item-1">
                                <h1 class="text-dark"><strong>REHABILITATED CATMON SUPER HEALTH CENTER</strong></h1>
                                <p class="card-text"><small class="text-body-secondary">By Malabon Ahon<br>
                                        Published November 28, 2023 10:02pm</small></p>
                                <img src="assets/news1.jpg" class="w-100">
                            </div>
                            <div id="item-1-1" class="pt-4 py-4 row container-md d-flex justify-content-center border-bottom border-2">
                                <div class="col" style="text-align: justify;">
                                    <p>Matagumpay na inilunsad ng Pamahalaang Lungsod ng malabon, sa pamumuno ni Mayor Jeannie Sandoval, ang Rehabilitation Project para sa Catmon Super Health Center!</p>

                                    <p>
                                        Layunin ng proyektong ito na lalong mapabuti ang mga pasilidad ng Catmon Super Health Center upang masiguro ang mataas na kalidad ng serbisyong medikal na natatanggap ng mga taga-Malabon.


                                </div>
                            </div>

                            <div id="item-2" class="mt-5 ">
                                <h1 class="text-dark"><strong>93 % RATING! Ospital ng Malabon.</strong></h1>
                                <p class="card-text"><small class="text-body-secondary">By Malabon Ahon<br>
                                        Published October 26, 2023 11:31 PM</small></p>
                                <img src="assets/news2.jpg" class="w-100">
                            </div>

                            <div id="item-2-1" class="pt-4 py-4 row container-md d-flex justify-content-center border-bottom border-2">
                                <p style="text-align: justify;">
                                <div class="col-xl-6 " style="text-align: justify;">

                                </div>
                                <div id="item-2-1" class="pt-4 py-4 row container-md d-flex justify-content-center border-bottom border-2">
                                    <div class="col" style="text-align: justify;">
                                        <p>
                                            Nakatanggap ang Ospital ng Malabon (OsMal) ng mataas na rating na 93% sa Revalidation of Integrated Hospital Operations and Management Program (IHOMP)
                                            <br><br>
                                            Malaking tagumpay ito hindi lang para sa OsMal kundi pati na rin sa ating lungsod dahil patunay ito ng ating dedikasyon sa pagpapanatili ng mataas na antas ng ating serbisyong medikal.

                                            <br><br>
                                            Congratulations, Ospital ng Malabon!
                                            <br><br>
                                            #MalabonAhon
                                    </div>
                                    <div id="item-3" class="mt-5 ">
                                        <h1 class="text-dark"><strong>2,706,600 na LIBRENG GAMOT</strong></h1>
                                        <p class="card-text"><small class="text-body-secondary">By Malabon Ahon<br> Published October 24, 2023 04:16 PM</small></p>
                                        <img src="assets/news3.jpg" class="w-100">
                                    </div>
                                    <div id="item-3-1">
                                        <div class="col py-5" style="text-align: justify; ">
                                            <p>
                                                Nagawang ipagkaloob ng Pamahalaang Lungsod, sa pangunguna ni Mayor Jeannie Sandoval, ang 2,076,000 na piraso ng gamot para sa 268,676 na residente ng Malabon.

                                                <br><br>
                                                Bahagi ito ng misyon ng pamahalaan na maghatid ng libreng gamot at serbisyong medikal para masiguro ang magandang kalusugan ng ating mamamayan.
                                                <br><br>
                                                #MalabonAhon

                                            <p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!---start of OTHER NEWS --->
                    <!---copy me start-->
                    <h2 class="title_2 my-5 text-center">More Health News</h2>
                    <div class="row">
                        <div class="col-xxl-6 my-2 ">
                            <img src="assets/news4.jpg" class="img-fluid h-100">
                        </div>

                        <div class="col-xxl-6 my-2 ">
                            <h2><strong>Ngayong Ears, Nose, and Throat Consciousness Week👂👃👄</strong></h2>
                            <p><small class="text-body-secondary">Ospital ng Malabon • December 5, 2024 | 10:28 am</small></p>

                            <p style="text-align: justify;">
                            Ngayong Ears, Nose, and Throat Consciousness Week, alagaan ang ating ENT health para maiwasan ang komplikasyon at mas malalang kondisyon. 👂👃👄
                            
                                <br><br>
                                🩺 Magpakonsulta agad kung may chronic sinusitis, hearing loss, ear infections, o matagalang sore throat.
                                <br><br>
                                ❗ Huwag balewalain ang paulit-ulit na sintomas.
                                <br><br>
                                👨‍⚕️ Kumunsulta sa pinakamalapit na health center para sa maagang lunas.
                            </p>
                            
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Read More</button>
                        </div>
                        
                        <div class="row">
                        <div class="col-xxl-6 my-2 ">
                            <img src="assets/news5.jpg" class="img-fluid h-100">
                        </div>

                        <div class="col-xxl-6 my-2 ">
                            <h2><strong>Every Blood Donor is a Hero!</strong></h2>
                            <p><small class="text-body-secondary">Malabon City of Government • November 20, 2024 | 03:05 pm</small></p>

                            <p style="text-align: justify;">
                            Muling magsasagawa ang Malabon City Health Department katuwang ang Philippine Red Cross Malabon Chapter ng Mass Blood Donation sa Nobyembre 22, Biyernes mula 9am-4pm sa Tonsuya Super Health Center.
                            
                                <br><br>
                                Hinihikayat ang lahat ng mga kwalipikadong magbigay ng dugo na makiisa sa aktibidad upang makatulong sa mga nangangailangan at makapagligtas ng buhay ng ating kapwa.
                                
                            </p>
                            
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Read More</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Redirect Notice!</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    You’re being redirected to another site. Are you sure you want to proceed?.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Proceed</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!---copy me end-->
                </div>
            </div>
        </div>    
</body>

</html>

<?php
include("footer.html");
?>
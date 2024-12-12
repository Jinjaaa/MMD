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
            <div class=" py-5 mb-5">
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
                                <a class="nav-link " href="#item-1">Header Title News</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1" href="#item-1-1">Sub Title News 1.1</a>
                                </nav>
                                <a class="nav-link" href="#item-2">Header Title News</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1" href="#item-2-1">Sub Title News 1.1</a>
                                </nav>
                                <a class="nav-link" href="#item-3">Header Title News</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1" href="#item-3-1">Sub Title News 1.1</a>
                                </nav>
                            </nav>

                        </nav>
                    </div>
                    <div class="col-8 pt-4">
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                            <div id="item-1">
                                <h1 class="text-dark"><strong>3 weather systems to bring cloudy skies, rain showers across PH</strong></h1>
                                <p class="card-text"><small class="text-body-secondary">By GMA Integrated News<br>
                                        Published May 9, 2024 7:11pm</small></p>
                                <img src="assets/Bg-home.png" class="w-100">
                            </div>
                            <div id="item-1-1" class="pt-4 py-4 row container-md d-flex justify-content-center border-bottom border-2">
                                <div class="col" style="text-align: justify;">
                                    <p>Three weather systems will affect the Philippines in the next 24 hours, the state weather bureau PAGASA said Thursday.<br> <br>Batanes and Cagayan will experience cloudy skies with scattered rain showers and thunderstorms due to the frontal system, PAGASA said in its 4 p.m. weather forecast.</p>

                                    <p>
                                        The rest of the country will have partly cloudy to cloudy skies with isolated rain showers or thunderstorms caused by the combined effects of the easterlies and localized thunderstorms.
                                        <br><br>
                                        Flash floods or landslides may occur.
                                        <br><br>
                                        Moderate to strong winds and moderate to rough waters may be felt over the northern and western sections of Northern Luzon, while the rest of the country will have light to moderate winds with slight to moderate seas.
                                    </p>
                                </div>
                            </div>

                            <div id="item-2" class="mt-5 ">
                                <h1 class="text-dark"><strong>276 PH cities, towns declare state of calamity due to El Niño</strong></h1>
                                <p class="card-text"><small class="text-body-secondary">By Pia Gutierrez, ABS-CBN News<br>
                                        Published May 10, 2024 05:18 PM PHT | Updated May 11, 2024 12:08 AM PHT</small></p>
                                <img src="../assets/home/el.jpg" class="w-100">
                            </div>

                            <div id="item-2-1" class="pt-4 py-4 row container-md d-flex justify-content-center border-bottom border-2">
                                <p style="text-align: justify;"><small class="text-body-secondary"> Vegetable farms lay barren in Benguet province on April 10, 2024 as El Niño continues to affect the Philippines. The highland vegetable-producing towns of Atok, Buguias, and Mankayan are severely affected by drought as expected rains have yet to arrive leaving some farmers unable to harvest crops. Dave Leprozo, ABS-CBN News/file
                                    </small></p>
                                <div class="col-xl-6 " style="text-align: justify;">
                                    <p>
                                        MANILA — A total of 276 Philippine cities and municipalities so far have declared a state of calamity due to the effects of El Niño, according to the Task Force El Niño.
                                        <br><br>
                                        “Every day, actually nadadagdagan iyong mga cities and municipalities na nagdideklara ng state of calamity. So, as of today, nasa 276 cities and municipalities, mayroon pa tayong matatanggap na mga ulat na patungkol sa deklarasyon ng state of calamity,” TF El Niño spokesperson Joey Villarama said in a televised briefing Friday.
                                        <br><br>
                                        Villarama said included in the number are 9 different provinces and the entire BARMM region
                                        <br><br>
                                        “At marami dito sa mga probinsiya na nagdeklara ng state of calamity ay nandito nga sa Mindanao kabilang iyong South Cotabato pati na rin iyong Sultan Kudarat kaya iyon po ang mga pinuntahan muna o inunang puntahan ng Pangulo dahil bukod sa malapit sa puso ng Pangulo ang Mindanao sila po iyong unang naapektuhan; Zamboanga Peninsula actually noong magsimula ang El Niño eh una siya, isa siya sa mga unang rehiyon na naapektuhan,” he said.

                                    </p>
                                </div>
                                <div class="col-xl-6" style="text-align: justify;">
                                    <p>

                                        “So, kahit sinabi po ng PAGASA na pahina na po ang epekto ng El Niño, nandiyan pa rin po iyong damang init na may epekto sa kalusugan, may epekto po sa agrikultura, pati sa ating fishing industry kaya kailangan pa rin tayong magbantay at may posibilidad po na makakaapekto pa rin ang matinding init at tagtuyot sa ating mga probinsiya sa mga susunod pang linggo.”
                                        <br><br>
                                        President Ferdinand Marcos Jr. earlier vowed a whole of government approach to assist farmers, fisherfolk, and their families affected by the El Niño phenomenon.
                                        <br><br>
                                        This week, the Philippine leader lead the distribution of financial aid to several Mindanao provinces, including General Santos, Cotabato, and Sultan Kudarat.
                                    </p>
                                </div>
                            </div>
                            <div id="item-3" class="mt-5 ">
                                <h1 class="text-dark"><strong>Thunderstorm Advisory No. 1</strong></h1>
                                <p class="card-text"><small class="text-body-secondary">By PAGASA-DOST<br>Issued at: 12:15 PM, 11 May 2024(Saturday)</small></p>
                                <img src="../assets/home/pagasa.jpg" class="w-100">
                            </div>
                            <div id="item-3-1">
                                <div class="col py-5" style="text-align: justify; ">
                                    <p>
                                        Moderate to Heavy rainshowers with lightning and strong winds are expected over Tarlac, Pampanga and Nueva Ecija within the next 2 hours.

                                        <br><br>
                                        The above conditions are being experienced in Zambales(Santa Cruz, Candelaria) which may persist within 2 hours and may affect nearby areas.
                                        <br><br>
                                        All are advised to take precautionary measures against the impacts associated with these hazards which include flash floods and landslides.
                                        <br><br>
                                        Keep monitoring for updates.
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
                    <img src="assets/Bg-home.png" class="img-fluid h-100">
                </div>

                <div class="col-xxl-6 my-2 ">
                    <h2><strong>Marian, pinagmamalaking englisera version niya si Zia</strong></h2>
                    <p><small class="text-body-secondary">Pilipino Star Ngayon • May 15, 2024 | 12:00am</small></p>

                    <p style="text-align: justify;">
                        Pinusuan ng libu-libong fans ang post ni Marian Rivera na picture nila ng anak na si Zia.
                        <br><br>
                        Lagi raw pinasasaya ng anak ang araw niya na mini me nga naman niya pero ayon nga kay Marian, englisera version nga lang niya.
                        <br><br>
                        “Being a mother to my sweet daughter is the greatest blessing. Her laughter, love, and light brighten up each day as in englisera version ko lang!”
                        <br><br>
                        Actually, ngayon pa lang daw, star na star na si Zia kahit sa international school na pinapasukan niya kaya hula talaga nila, magso-showbiz si Zia.
                    </p>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Read More</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!---copy me end-->
        </div>
    </div>
</body>

</html>

<?php
include("footer.html");
?>
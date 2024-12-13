<?php
include("header.html");
?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
}
?>

<?php
    session_start();

    if (!isset($_SESSION['feedbacks'])) {
        $_SESSION['feedbacks'] = [];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = htmlspecialchars($_POST['username'] ?? 'Anonymous');
        $rating = htmlspecialchars($_POST['rating'] ?? 'No rating');
        $feedback = htmlspecialchars($_POST['feedback'] ?? 'No feedback provided');


        $_SESSION['feedbacks'][] = [
            'username' => $username,
            'rating' => $rating,
            'feedback' => $feedback,
        ];
    }
?>

<!---just in case--->
<?php
// Clear all feedbacks
if (isset($_POST['reset'])) {
    $_SESSION['feedbacks'] = []; // Empty the feedback array
}
?>
<!---end--->


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
                    <li class="breadcrumb-item active" aria-current="page">Feedback</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid pb-5">

        <div class="container-md text-center mt-5">
            <h1 class="title_4">
                LEAVE A FEEDBACK
            </h1>
            <p>We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-8">
                <div class="container-md rounded-3 border p-5 shadow-sm my-5">
                    <h1 class="py-3"><strong>Feedback Form</strong></h1>
                    <form class="row g-3 needs-validation" method='post' action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" novalidate>
                        <div class="col-md-6 my-3">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom06" class="form-label">Rating</label>
                            <select class="form-select text-body-secondary" id="rating" name="rating" required>
                                <option selected disabled value="">Please Select</option>
                                <option value="⭐">1 star</option>
                                <option value="⭐⭐">2 stars</option>
                                <option value="⭐⭐⭐">3 stars</option>
                                <option value="⭐⭐⭐⭐">4 stars</option>
                                <option value="⭐⭐⭐⭐⭐">5 stars</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Comment:</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Type here..." name="feedback" rows="6" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message in the textarea.
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="form-check form-check-reverse">
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
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-md  my-5">
            <h1 class="py-5 text-center"><strong>Hear The Love From The User</strong></h1>
            <div class="row">
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item my-5">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                    Past Months
                                </button>
                            </h2>
                            <div id="collapsetwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Username:</strong> @John Doe<br>
                                    <strong>Rating:</strong> ⭐⭐⭐⭐⭐<br>
                                    <strong>Feedback:</strong>
                                    <p class="card-text"><small class="text-body-secondary ">I absolutely love the cozy vibes of this website! The layout is clean and user-friendly, but the loading time could be improved a bit. Overall, great experience!</small></p>

                                </div>
                                <hr>
                                <div class="accordion-body">
                                    <strong>Username:</strong> @TechieTraveler<br>
                                    <strong>Rating:</strong> ⭐⭐⭐⭐<br>
                                    <strong>Feedback:</strong>
                                    <p class="card-text"><small class="text-body-secondary ">This platform is amazing! Everything is intuitive, and I found what I needed in seconds. Keep up the great work—can't wait to see what updates you bring next!</small></p>
                                </div>
                            </div>

                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item my-5">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Month of December
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <?php if (!empty($_SESSION['feedbacks'])): ?>
                                            <?php foreach ($_SESSION['feedbacks'] as $entry): ?>
                                                <div class="mb-3">
                                                    <strong>Username:</strong> @<?php echo $entry['username']; ?><br>
                                                    <strong>Rating:</strong><?php echo $entry['rating']; ?><br>
                                                    <strong>Feedback:</strong>
                                                    <p class="card-text"><small class="text-body-secondary "><?php echo $entry['feedback']; ?></p>
                                                </div>
                                                <hr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <p>No feedback yet. Submit the form to see feedback here.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!---just in 
            <form method="POST" action="">
                <button type="submit" name="reset" class="btn btn-danger">Clear All Feedbacks</button>
            </form>
            case-->


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
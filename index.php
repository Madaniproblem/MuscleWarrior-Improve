<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS PLUGIN -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- BOOSTSTRAP PLUGIN -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.bundle.js"></script>

    <title>MuscleWarrior</title>
</head>
<body>

<!-- ABOVE SECTION -->
    <?php include 'components/usernavigation.php'?>
<!-- ABOVE SECTION -->

<!-- LANDING PAGE SECTION -->
<section id="About-us">
    <div class="main-landingpage">
        <div class="wrap-landingpage">
            <img src="assets/photos/muscledog.png" alt="">
            <div class="wrap-title">
                <h1>Welcome to Muscle<span>Warrior</span> Website</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quam risus, pellentesque id neque sit amet, pharetra consectetur orci. Donec orci nulla, euismod ut velit congue, facilisis sodales ex. Donec fringilla, nisl hendrerit gravida mollis, eros arcu lacinia risus, ut tempor quam nisi id augue. Praesent est ipsum, ornare vel aliquam a, ultricies in libero. Ut quis metus id tellus bibendum lobortis in sit amet augue. Vivamus maximus urna ac lorem molestie porttitor. Proin a varius augue.</h2>
            </div>
        </div>
    </div>
</section>
    
<!-- LANDING PAGE SECTION -->

<!-- OFFER SECTION -->
<section id="Offer"> 
    <div class="main-offersection">
        <div class="offer-title">
            <h1>Offer</h1>
            <p>Offer for you in every reason to start, Let's start the gym</p>
        </div>

        <div class="wrap-card">
            <div class="cards">
                <img src="assets/photos/muscle1-2.jpg" alt="">
                <h1 class="text-center">Just bored</h1>
                <p class="text-center">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
            </div>
            <div class="cards">
                <img src="assets/photos/muscle2-2.jpg" alt="">
                <h1 class="text-center">To be healthy</h1>
                <p class="text-center">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
            </div>
            <div class="cards">
                <img src="assets/photos/rhinobig.jpg" alt="">
                <h1 class="text-center">Heartbreak</h1>
                <p class="text-center">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
            </div>
        </div>
    </div>
</section>
<!-- OFFER SECTION -->

<!-- CONTACT US SECTION -->
<section id="Contact-us">
    <div class="main-contactus">
        <div class="wrap-contactus bg-dark">
            <div class="contactus-title">
                <h1>Contact Us</h1>
            </div>

            <form class="formcontactus" action="emailbackend/Email.php" method="POST">
                <input type="text" name="namapenuh" placeholder="Full name">
                <input type="email" name="email" placeholder="Email" id="email" required>
                <textarea name="message" placeholder="Send message" id="message" required></textarea>
                <button class="btn2" type="submit" name="send">Send</button>
            </form>
        </div>
    </div>
</section>
<!-- CONTACT US SECTION -->

<!-- FOOTER -->
<div class="footer bg-dark">
    <p>&copy; 2024 Thamarezki Febyanda Zahran All Rights Reserved</p>
</div>
<!-- FOOTER -->

<script>

    var pesanteks = "<?= $_SESSION['pesan'] ?? ''; ?>";

    if (pesanteks != "") {
        Swal.fire({
            title: "Thanks",
            text: pesanteks,
            icon: "success"
        });
        unset($_SESSION['pesan']);
    }
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./Assets/Logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap">
    <?php require "variables.php"; ?>
    
</head>
<body>
    
    <!-- header -->
    <div class="header pc">
            <div class="logo">
                <a href="index.html"><img src="./Assets/Logo.png" alt="logo"></a>
            </div>

        <div class="navigation">
            <a href="./index.html">Our Hotel</a>
            <a href="./rooms&rates.html">Rooms & Rates</a>
            <a href="#">Facilities</a>
            <a href="#">Contact Us</a>
        </div>
    </div>

    <!-- welcome section -->
    <div class="welcome-section pc">
        <h1>WELCOME TO BON HOTEL</h1>
        <h3>Good People. Good Thinking. Good Feeling.</h3>
        <a href="#">EXPLORE</a>
    </div>

    <!-- rooms & rates -->
    <div class="rooms-rates pc">

        <div class="rooms-rates-title">
            <h1>Rooms & Rates</h1>
        </div>

        <div class="rooms-rates-cards">
            <?php
                foreach ($cards as $card) {
                    echo '<div class="card card1">
                                <img src="' . $card['image'] . '" alt="">
                                <div class="cards-content">
                                    <h1>' . $card['title'] . '</h1>
                                    <a href="#">' . $card['button'] . '</a>
                                </div>
                            </div>';
                }
            ?>
        </div>

        <div class="rooms-rates-btn">
            <h1>Get a room already!</h1>
            <a href="#">Book Now</a>
        </div>
    </div>

    <!-- footer -->
    <div class="footer pc">
        <div class="footer-logo">
            <img src="./Assets/Footer Logo.png" alt="">
        </div>

        <div class="footer-nav">
            <a href="#">Our Hotels</a>
            <a href="#">Our Conferencing</a>
            <a href="#">Our Company</a>
            <a href="#">Hotel Design</a>
            <a href="#">Careers</a>
        </div>

        <div class="footer-contact">
            <h3>Bon Hotels Head Office</h3>
            <a href="#">+27 434 344 432</a>
            <a href="#">info@bonhotels.com</a>
        </div>
    </div>
</body>
</html>
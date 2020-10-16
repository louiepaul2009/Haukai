<!DOCTYPE html>
<html>
<?php
include "header.html";
?>
<head>
    <title>Haukai Restaurant Contact page</title>
</head>
<?php
include "navigation.html";
?>

<head>
    <script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDLw5JWX3NxVKENjCrTxECQd0Q5dMp1Xkk&callback=initMap' type='text/javascript'></script>
	<title>Haukai Restaurant Contact page</title>
</head>
<body>
    <header class="header w3-green">
        <strong>Haukai Restaurant</strong>
    </header>
    <nav class="w3-bar w3-black">
        <a href='./index.html' class="w3-bar-item w3-button">Home</a>
        <a href='./contact.html' class="w3-bar-item w3-button">Contact</a>
        <a href='./calendar.html' class="w3-bar-item w3-button">Hours</a>
        <a href='./menu.html' class="w3-bar-item w3-button">Menu</a>
        <a href='./reservation.html' class="w3-bar-item w3-button">Reservations</a>
        <a href='./admin.html' class="w3-bar-item w3-button">Admin Page</a>
    </nav>

    <div class="row" role="contact and location details">
        <div class="column" role="contact details">
            <h2>Contact us</h2>
            <h3>
                Bay of Islands<br>
                New Zealand<br><br>
                Phone: 123-4567<br>
                Email: bookings@haukairestaurant.co.nz<br>
            </h3>
        </div>
        <div class="column" role="location map">
            <h2>How to reach us</h2>
            <div role="map" id="map"></div>
        </div>
    </div>

    <!-- And here is our main footer that is used across all the pages of our website -->
    <?php
        echo '</div></div>';
        include_once("footer.html");
    ?>
</body>
</html>
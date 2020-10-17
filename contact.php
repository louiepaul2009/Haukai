<!DOCTYPE html>
<html>
<?php
include "header.html";
?>
<head>
<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDLw5JWX3NxVKENjCrTxECQd0Q5dMp1Xkk&callback=initMap' type='text/javascript'></script>
	<title>Haukai Restaurant Contact page</title>
</head>
<?php
include "navigation.html";
?>

<body>
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
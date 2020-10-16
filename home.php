<!DOCTYPE html>
<html>
<?php
include "header.html";
?>
<head>
    <title>Haukai Restaurant homepage</title>
    <script src='./scripts/scripts.js'></script>
    <script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180288442-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
         
          gtag('config', 'UA-180288442-1');
        </script>
</head>
<?php
include "navigation.html";
?>

<body>
    <header class="header w3-green">
        <strong>Haukai Restaurant</strong>
    </header>
    <nav class="w3-bar w3-black">
        <a href='./index.html' class="w3-bar-item w3-button">Home</a>
        <a href='./contact.html' class="w3-bar-item w3-button">Contact</a>
        <a href='./calendar.html' class="w3-bar-item w3-button">Hours</a>
        <a href='./menu.php' class="w3-bar-item w3-button">Menu</a>
        <a href='./reservation.html' class="w3-bar-item w3-button">Reservations</a>
        <a href='./admin.html' class="w3-bar-item w3-button">Admin Page</a>
    </nav>

    <main>
    <div class="container" role="main">
        <div class="mySlides fade" role="slide_images"> 
            <picture>
                <source srcset="images/restaurant_small.jpg" media="(max-width: 480px)">
                <source srcset="images/restaurant_medium.jpg" media="(max-width: 1024px)">
                <img src="images/restaurant2.jpg" style="width:100%" alt="outdoor view of restaurant">
            </picture>
            <p class="text">
                A Wonderful Place to Dine in<br>
                <span class="text2" role="description">
                    Open from Wednesday to Friday<br>
                    5:30pm to 10:00pm
                </span>
            </p>
        </div>

        <div class="mySlides fade" role="slide_images">
            <picture>
                <source srcset="images/kai_small.jpg" media="(max-width: 480px)">
                <source srcset="images/kai_medium.jpg" media="(max-width: 1024px)">
                <img src="images/kai.jpg" style="width:100%" alt="Maori kai">
                <p class="text"><span style="color:white" role="description">A restaurant that specialises in Maori kai</span></p>
            </picture>
        </div>

        <div class="mySlides fade" role="slide_images">
            <picture>
                <source srcset="images/indoors_small.jpg" media="(max-width: 480px)">
                <img src="images/indoor2.jpg" style="width:100%" alt="indoor view of restaurant">
            </picture>
            <p class="text"><span style="color:white" role="description">Based in the Bay of Islands</span></p>
        </div>
    </div>
    </main>
    
    <?php
        echo '</div></div>';
        include_once("footer.html");
    ?>
    
    <script>
        showSlides();
    </script>
</body>
</html>
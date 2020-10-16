<!DOCTYPE html>
<html>
<?php
include "header.html";
?>
<head>
    <title>Haukai Restaurant Administration page</title>
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
        <a href='./menu.html' class="w3-bar-item w3-button">Menu</a>
        <a href='./reservation.html' class="w3-bar-item w3-button">Reservations</a>
		<a href='./admin.html' class="w3-bar-item w3-button">Admin Page</a>
    </nav>

    <!--Here is our page's main content-->
    <main>
        <div class="container" role="Admin">
            < <body>
				<p>This page is restricted for Haukai Staff and Administration only.</p>
				<p>Click <a href="private/private.html">here</a> to access the private page.</p>
			</body>
        </div>
    </main>

    <!-- And here is our main footer that is used across all the pages of our website -->
    <?php
        echo '</div></div>';
        include_once("footer.html");
    ?>
</body>
</html>
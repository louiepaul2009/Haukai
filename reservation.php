<!DOCTYPE html>
<html>
<?php
include "header.html";
?>
<head>
    <title>Haukai Restaurant Reservation page</title>
</head>
<?php
include "navigation.html";
?>

    <!--Here is our page's main content-->
    <main>
        <div class="container" role="reservation_form">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd__qzXmKt26RXHXECHnpDcNvEILUkzaQK5nbq4ZC0Gy_FzGw/viewform?embedded=true"
                    width="640" height="1537" frameborder="0" marginheight="0" marginwidth="0">
                Loading…
            </iframe>
        </div>
    </main>

    <!-- And here is our main footer that is used across all the pages of our website -->
    <?php
        echo '</div></div>';
        include_once("footer.html");
    ?>
</body>
</html>
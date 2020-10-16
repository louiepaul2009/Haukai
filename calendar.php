<!DOCTYPE html>
<!DOCTYPE html>
<html>
<?php
include "header.html";
?>
<head>
    <title>Haukai Restaurant Operating Hours page</title>
</head>
<?php
include "navigation.html";
?>

<body>
    <!--Here is our page's main content-->
    <main>
        <div class="container" role="calendar">
            <iframe title="Day and Hours Open" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Pacific%2FAuckland&amp;src=bG91aWVwYXVsMjAwOUBnbWFpbC5jb20&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4ubmV3X3plYWxhbmQjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%230B8043&amp;showTabs=0&amp;showPrint=0&amp;showCalendars=0" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </main>

    <!-- And here is our main footer that is used across all the pages of our website -->
    <?php
        echo '</div></div>';
        include_once("footer.html");
    ?>
</body>
</html>
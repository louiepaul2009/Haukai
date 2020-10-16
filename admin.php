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
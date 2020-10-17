<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles/styles.css">
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
    <title>Haukai Restaurant Private page</title>    
</head>

<body>
    <header class="header w3-green">
        <strong>Haukai Restaurant</strong>
    </header>
    <nav class="w3-bar w3-black">
        <a href='../index.html' class="w3-bar-item w3-button">Home</a>
        <a href='../contact.html' class="w3-bar-item w3-button">Contact</a>
        <a href='../calendar.html' class="w3-bar-item w3-button">Hours</a>
        <a href='../menu.html' class="w3-bar-item w3-button">Menu</a>
        <a href='../reservation.html' class="w3-bar-item w3-button">Reservations</a>
		    <a href='../admin.html' class="w3-bar-item w3-button">Admin Page</a>
    </nav>

          
	<script type="text/javascript">

    $(function () {
        $("#upload").bind("click", function () {
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
            if (regex.test($("#fileUpload").val().toLowerCase())) {
                if (typeof (FileReader) != "undefined") {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var table = $("<table />");
                        var rows = e.target.result.split("\n");
                        for (var i = 0; i < rows.length; i++) {
                            var row = $("<tr />");
                            var cells = rows[i].split(",");
                            if (cells.length > 1) {
                                for (var j = 0; j < cells.length; j++) {
                                    var cell = $("<td />");
                                    cell.html(cells[j]);
                                    row.append(cell);
                                }
                                table.append(row);
                            }
                        }
                        $("#dvCSV").html('');
                        $("#dvCSV").append(table);
                    }
                    reader.readAsText($("#fileUpload")[0].files[0]);
                } else {
                    alert("This browser does not support HTML5.");
                }
            } else {
                alert("Please upload a valid CSV file.");
            }
        });
    });
	</script>
    
	<!--Here is our page's main content-->
    <main>
		<br>
		<p><strong>Choose file to show:</strong><br /><br>
		- Employee_Details - show the Name and contact numbers of all employees <br />
		- Roster_Schedule - the scheduled roster for the next two weeks<br />
		</p>
		&emsp;&emsp;
		<input type="file" id="fileUpload" accept=".csv" />
		<input type="button" id="upload" value="Upload" />
		<hr />
		<div id="dvCSV">
		</div>
		<br>
		
	</main>
	<br>

    <!-- And here is our main footer that is used across all the pages of our website -->
    <?php
        echo '</div></div>';
        include_once("footer.html");
    ?>
</body>
</html>
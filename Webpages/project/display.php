<!DOCTYPE html>
<html>
<head>
	<title>Display Data</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
		th {
			background-color: #ccc;
			font-weight: bold;
		}
		p{margin-block:0;}
		.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
			max-width: 95vw;
		}
	</style>
</head>
<body>
<div class="p-5 bg-info text-center">
            <center><h1>Database</h1></center>
            <p>Details about the resultant images after processing</p>
        </div>
        <div class="container mt-5">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>Resultant Image</th>
                    <th>Adulteration Percentage</th>
                    <th>Details</th>
                </tr></thead>
                <tr>
                    <td><img src="C:/Users/PER 12/Desktop/webpage/webpages/images/test(1).jfif"></td>
					
                    <td>
					<?php
					// Connect to database
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "project";

					$conn = mysqli_connect($servername, $username, $password, $dbname);

					// Check connection
					if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

					// Fetch first record
					$sql = "SELECT * FROM data LIMIT 1";
					$result = mysqli_query($conn, $sql);

					// Display first record
					if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<p><b>Quality</b></p>Percentage: <br>Adulterated: ";
						if($row["q"]=='1'){echo "No";}
						else{echo "Yes";}
					}
					} else {
					echo "0 results";
					}
					?>

					</td>
                    <td>
					
					<?php
					// Connect to database
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "project";

					$conn = mysqli_connect($servername, $username, $password, $dbname);

					// Check connection
					if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

					// Fetch first record
					$sql = "SELECT * FROM data LIMIT 1";
					$result = mysqli_query($conn, $sql);

					// Display first record
					if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<p><b>Cultivator</b></p>ID: " . $row["id"] . "<br>Farm location: " . $row["fl"] . "<br>Harvest Date: " . $row["hdate"] . "<br><br><p><b>Distributor</b></p>Name: " . $row["dn"] . "<br>Batch Number: " . $row["bn"] . "<br>Distribution Date: " . $row["ddate"] . "<br><br><p><b>Arrival</b></p>Arrival Date: " . $row["adate"] . "<br><br><p><b>Remarks</b></p>" . $row["r"];
					}
					} else {
					echo "0 results";
					}

					mysqli_close($conn);
					?>

					</td>
				</tr>
				<tr>
                    <td><img src="C:/Users/PER 12/Desktop/webpage/webpages/images/test(1).jfif"></td>
					
                    <td>
					<?php
					// Connect to database
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "project";

					$conn = mysqli_connect($servername, $username, $password, $dbname);

					// Check connection
					if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

					// Fetch first record
					$sql = "SELECT * FROM data LIMIT 1";
					$result = mysqli_query($conn, $sql);

					// Display first record
					if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<p><b>Quality</b></p>Percentage: <br>Adulterated: No";}
					}
					else {
					echo "0 results";
					}
					?>

					</td>
                    <td>
					
					<?php
					// Connect to database
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "project";

					$conn = mysqli_connect($servername, $username, $password, $dbname);

					// Check connection
					if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

					// Fetch first record
					$sql = "SELECT * FROM data LIMIT 1,1";
					$result = mysqli_query($conn, $sql);

					// Display first record
					if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<p><b>Cultivator</b></p>ID: " . $row["id"] . "<br>Farm location: " . $row["fl"] . "<br>Harvest Date: " . $row["hdate"] . "<br><br><p><b>Distributor</b></p>Name: " . $row["dn"] . "<br>Batch Number: " . $row["bn"] . "<br>Distribution Date: " . $row["ddate"] . "<br><br><p><b>Arrival</b></p>Arrival Date: " . $row["adate"] . "<br><br><p><b>Remarks</b></p>" . $row["r"];
					}
					} else {
					echo "0 results";
					}

					mysqli_close($conn);
					?>

					</td>
				</tr>
			</table>
</body>
</html>

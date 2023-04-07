<?php
// Include the file for database connection
include 'connection.php';
if(isset($_POST['dn'])) {
    $dn = $_POST['dn'];
} else {
    $dn = "";
}
// Get the form input values using $_POST superglobal array
$id = $_POST['id'];
$fl = $_POST['fl'];
$hdate = $_POST['hdate'];
$dn = $_POST['dn'];
$bn = $_POST['bn'];
$ddate = $_POST['ddate'];
$adate = $_POST['adate'];
$q = $_POST['q'];
$r = $_POST['r'];

// Insert the input values into the "data" table in the "project" database
$sql = "INSERT INTO data (id, fl, hdate, dn, bn, ddate, adate, q, r) VALUES ('$id', '$fl', '$hdate','$dn', '$bn', '$ddate','$adate', '$q', '$r')";
if ($conn->query($sql) === TRUE) {
    echo "Data received successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

/* Display the input values
echo "<h2>Form Input Values</h2>";
echo "<p><b>ID:</b> " . $id . "</p>";
echo "<p><b>Farm Location:</b> " . $fl . "</p>";
echo "<p><b>Harvest Date:</b> " . $hdate . "</p>";*/
?>

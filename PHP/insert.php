<?php
// Include the file for database connection
include 'connection.php';

if(isset($_POST['Message'])){
    // Get the form input values using $_POST superglobal array
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $msg = $_POST['Message'];

    // Insert the input values into the "data" table in the "project" database
    $sql = "INSERT INTO dataa (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$msg')";

    if ($conn->query($sql) === TRUE) {
        echo "Data received successfully!";
        $phone = "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

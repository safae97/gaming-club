<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $_POST["full_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $cellule = $_POST["cellule"];

    // Connect to your MySQL database (replace these variables with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gamingwebsite";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert form data into the signup table
    $sql = "INSERT INTO signup (full_name, phone_number, email, cellule)
            VALUES ('$full_name', '$phone_number', '$email',  '$cellule')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "youve been registred successfuly";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

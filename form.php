<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gamingwebsite";

    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare data for insertion
    $competition = $_POST['competition'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    // Prepare SQL statement
    $sql = "INSERT INTO form (competition, first_name, last_name, email, telephone, message) VALUES ('$competition', '$firstname', '$lastname', '$email', '$telephone', '$message')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>

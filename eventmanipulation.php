<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamingwebsite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Event
if (isset($_POST['add_event'])) {
    $event_title = $_POST['event_date'];
    $event_description = $_POST['event_description'];
    // Add other event details as needed

    // Insert into database
    $sql = "INSERT INTO event (date, description) VALUES ('$event_title', '$event_description')";
    if ($conn->query($sql) === TRUE) {
        echo "Event added successfully";
    } else {
        echo "Error adding event: " . $conn->error;
    }
    
}

// Remove Event
if (isset($_POST['remove_event'])) {
    $event_id = $_POST['event_id']; // Assuming you have an event ID to identify the event to be deleted

    // Delete from database
    $sql = "DELETE FROM event WHERE event_id = '$event_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Event removed successfully";
    } else {
        echo "Error removing event: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

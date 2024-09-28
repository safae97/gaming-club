<?php
// Database connection
$host = "localhost";
$dbname = "gamingwebsite";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

// Check if the remove member button is clicked
if (isset($_POST['remove_member'])) {
    // Get the member's full name to remove
    $member_name = $_POST['member_name'];

    // Prepare and execute the SQL statement to remove the member
    $sql = "DELETE FROM signup WHERE full_name = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $member_name);
        mysqli_stmt_execute($stmt);

        // Check if any rows were affected
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Member removed successfully.";
        } else {
            echo "No member found with the given name.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

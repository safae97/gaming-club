<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Redirect the user to index.html
header("Location: index.html");
exit;
?>
``

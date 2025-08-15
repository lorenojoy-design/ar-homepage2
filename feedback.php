<?php
// Include database connection
require 'db.php';

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Insert into database
$sql = "INSERT INTO feedback (name, email, comment) VALUES ('$name', '$email', '$comment')";
if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

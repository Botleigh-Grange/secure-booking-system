<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];

// Validate and sanitize data if needed

// Save data to a text file
$data = "Name: $name\nEmail: $email\nBooking Date: $date\n\n";
file_put_contents('bookings.txt', $data, FILE_APPEND);

// Redirect the user to the thank-you page
header("Location: thank_you.html");
exit();
?>



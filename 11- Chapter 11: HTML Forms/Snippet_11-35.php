<?php

// Replace with your email address
$you = "you@youremail.com";

// Place HTML input fields into variables
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$country = $_REQUEST['country'];
$subject = $_REQUEST['subject'];
$reply = $_REQUEST['reply'];
$message = $_REQUEST['message'];

// Validate email address
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    die("Invalid email.");
}

// Build the message to send
$content = "
Name: $name
Email: $email
Phone: $phone
Country: $country
Subject: $subject
Best Method to Reply: $reply

Subject:
$subject

Message:
$message";

// Build mail headers
$headers = "Reply-to: $email";

// Send the message
mail($you, $you, $subject, $headers);
?>
<p>Your message was sent successfully.</p>

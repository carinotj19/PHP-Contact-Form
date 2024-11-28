<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validate inputs
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = 'your-email@example.com';  // Replace with your email address
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "<p>Thank you, $name. Your message has been sent successfully!</p>";
        } else {
            echo "<p>Sorry, something went wrong. Please try again later.</p>";
        }
    } else {
        echo "<p>Please fill in all fields correctly.</p>";
    }
}
?>
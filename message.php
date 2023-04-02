<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and trim the input
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Validate the input
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        // Handle the error, e.g. show an error message or redirect back to the form page
    }

    // Build the email message
    $to = "alexiad_2003@yahoo.com";
    $subject = "New message from your website: $subject";
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        // Handle the success, e.g. show a success message or redirect to a thank you page
    } else {
        // Handle the error, e.g. show an error message or redirect back to the form page
    }
}
?>
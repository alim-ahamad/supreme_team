<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields data
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = "ahamadalim65@gmail.com";

    // Set email subject
    $subject = "Contact Form Submission";

    // Construct email body
    $body = "First Name: $name\n";
    $body .= "Last Name: $lastname\n";
    $body .= "Email: $email\n";
    $body .= "Phone Number: $number\n";
    $body .= "Message:\n$message";

    // Set email headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Redirect back to the contact form if accessed directly
    header("Location: contact_form.html");
    exit;
}
?>

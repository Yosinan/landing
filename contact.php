<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Send an email
    $to = "ymymym4634@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message . "\n";
    
    mail($to, $subject, $body);
    
    // Redirect the user to a thank you page
    header("Location: thank-you.html");
    exit();
}
?>

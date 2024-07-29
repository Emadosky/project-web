<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $selectedService = $_POST['selectedService'];
    $messageContent = $_POST['message'];

    $to = "malnaby87@gmail.com@gmail.com";  // Change this to your Gmail address
    $subject = "New Service Request";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nSelected Service: $selectedService\n\nMessage:\n$messageContent";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
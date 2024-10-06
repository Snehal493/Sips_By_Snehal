<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can add code to send an email or save the data to a database

    echo "Thank you, $name! Your message has been received.";
} else {
    echo "Invalid request.";
}
?>
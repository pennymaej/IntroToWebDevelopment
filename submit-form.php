<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);

    // Optional: Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } else {
        // This is where you'd normally save the email or send it somewhere
        echo "Thank you for subscribing, $email!";
    }
} else {
    echo "This form only accepts POST requests.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "simonwangai98@gmail.com";
    $subject = "New form submission";
    $message = "First Name: " . $_POST["firstName"] . "\n" .
               "Last Name: " . $_POST["lastName"] . "\n" .
               "Email Address: " . $_POST["email"] . "\n" .
               "Contact Number: " . $_POST["contactNumber"] . "\n" .
               "Location: " . $_POST["location"] . "\n" .
               "Phone Model: " . $_POST["phoneModel"];

    $headers = "From: simonwangai98@gmail.com" . "\r\n" .
               "Reply-To: simonwangai98@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Email sent successfully!";
    } else {
        http_response_code(500);
        echo "Failed to send email.";
    }
} else {
    http_response_code(400);
    echo "Invalid request.";
}
?>

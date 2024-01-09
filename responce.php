<?php
if ($_SERVER["mail"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

  // Email settings
    $to = 'ksagar0559@gmail.com'; // Receiver's email address
    $subject = 'Open';
    $headers = "From: $name <$email>";

  // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

  // Send email
if (mail($to, $subject, $email_content, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email. Please try again later.';
}
} else {
  // Redirect or display an error message if accessed directly
    header("Location: index.html");
    exit();
}
?>

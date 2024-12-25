<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient email
    $to = "harishsankar133@gmail.com";

    // Email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Email body
    $email_body = "
    You have received a new message from the contact form on your website.\n\n
    Name: $name\n
    Email: $email\n
    Subject: $subject\n
    Message: $message
    ";

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<p>Message sent successfully!</p>";
    } else {
        echo "<p>Error sending message. Please try again later.</p>";
    }
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient email
    $to = "harishsankar133@gmail.com";

    // Email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Email body
    $email_body = "
    You have received a new message from the contact form on your website.\n\n
    Name: $name\n
    Email: $email\n
    Subject: $subject\n
    Message: $message
    ";

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<p>Message sent successfully!</p>";
    } else {
        echo "<p>Error sending message. Please try again later.</p>";
    }
}
?>
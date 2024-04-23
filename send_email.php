<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require 'vendor/autoload.php'; // Include PHPMailer autoload.php file

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $telefoon = $_POST['telefoon'];
    $adres = $_POST['adres'];
    $email = $_POST['email'];
    $opmerking = $_POST['opmerking'];

    // Email details
    $to = "nnauaf60@gmail.com"; // Your company email address
    $subject = "Contact Form Submission";
    $message = "Voornaam: $voornaam\nAchternaam: $achternaam\nTelefoon: $telefoon\nAdres: $adres\nEmail: $email\nOpmerking:\n$opmerking";

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your@example.com'; // SMTP username
        $mail->Password   = 'your_password';   // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port       = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $voornaam . ' ' . $achternaam);
        $mail->addAddress($to); // Add a recipient

        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Send email
        $mail->send();
        // Redirect back to the previous page with a success message
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?success=true");
        exit; // Terminate the script after redirection
    } catch (Exception $e) {
        // Redirect back to the previous page with an error message
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?success=false");
        exit; // Terminate the script after redirection
    }
} else {
    // Invalid request method
    echo "Error: Invalid request method.";
}
?>

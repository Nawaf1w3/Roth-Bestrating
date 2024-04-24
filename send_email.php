<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

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
    $to = "97100725@st.deltion.nl"; // Your company email address
    $subject = "Bestratingbedrijf Roth";
    $message = "<p style='font-family: Arial, sans-serif; font-size: 24px;'>Uw klant heeft een vraag op Bestratingbedrijf Roth: <br><br></p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Klant naam</strong><br>$voornaam $achternaam</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Telefoon</strong><br> $telefoon</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Adres</strong><br> $adres</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Email</strong><br> $email</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Opmerkin:</strong><br>$opmerking</p><br>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'>Met vriendlijke groeten,<br> Uw Website.</p>";




    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nnauaf6055@gmail.com'; // SMTP username
        $mail->Password   = 'aapy ljxi razv ijpb';   // SMTP password
        $mail->SMTPSecure = 'ssl'; // Enable TLS encryption
        $mail->Port       = 465; // TCP port to connect to

        // Recipients
        $mail->setFrom('nnauaf6055@gmail.com');
        $mail->addAddress($to); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to plain text
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

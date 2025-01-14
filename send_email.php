<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library and other necessary files
require 'vendor/autoload.php';

// Initialize variables
$errors = [];

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $requiredFields = [
        'voornaam' => 'Voornaam',
        'achternaam' => 'Achternaam',
        'telefoon' => 'Telefoon',
        'adres' => 'Adres',
        'email' => 'Email',
        'opmerking' => 'Opmerking'
    ];

    foreach ($requiredFields as $field => $fieldName) {
        if (empty($_POST[$field])) {
            $errors[$field] = "Please fill out the $fieldName field.";
        }
    }

    // Validate phone number
    $telefoon = $_POST['telefoon'];
    if (!preg_match("/^06\d{8}$/", $telefoon)) {
        $errors['telefoon'] = "Invalid phone number format";
    }

    // Validate email
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }

    // If there are no validation errors, proceed with sending email
    if (empty($errors)) {
        // Get form data
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $telefoon = $_POST['telefoon'];
        $adres = $_POST['adres'];
        $email = $_POST['email'];
        $opmerking = $_POST['opmerking'];

        // Process uploaded files
        $attachments = [];
        if (!empty($_FILES['formFile']['name'][0])) {
            $file_count = count($_FILES['formFile']['name']);
            for ($i = 0; $i < $file_count; $i++) {
                $attachments[] = [
                    'tmp_name' => $_FILES['formFile']['tmp_name'][$i],
                    'name' => $_FILES['formFile']['name'][$i]
                ];
            }
        }

        // Email details
        $to = "nnauaf60@gmail.com"; // Temporary email for testing
        $subject = "Bestratingbedrijf Roth";
        $message = "<p style='font-family: Arial, sans-serif; font-size: 24px;'>Uw klant heeft een vraag op Bestratingbedrijf Roth: <br><br></p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Klant naam</strong><br>$voornaam $achternaam</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Telefoon</strong><br>$telefoon</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Adres</strong><br>$adres</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Email</strong><br>$email</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Opmerking</strong><br>$opmerking</p><br>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'>Met vriendelijke groeten,<br> Uw Website.</p>";

        // Initialize PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'nnauaf6055@gmail.com'; // SMTP username
            $mail->Password = 'aapy ljxi razv ijpb'; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption
            $mail->Port = 465; // TCP port to connect to

            // Recipients
            $mail->setFrom('nnauaf6055@gmail.com');
            $mail->addAddress($to); // Add a recipient

            // Attach files
            foreach ($attachments as $attachment) {
                $mail->addAttachment($attachment['tmp_name'], $attachment['name']);
            }

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $message;

            // Send email
            $mail->send();

            // Send success response
            header('Content-Type: application/json');
            echo json_encode(['success' => true]);
            exit;
        } catch (Exception $e) {
            // Send error response
            header('Content-Type: application/json');
            echo json_encode([
                'success' => false,
                'message' => 'An error occurred while sending the email.'
            ]);
            exit;
        }
    } else {
        // Send error response with validation errors
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'errors' => $errors
        ]);
        exit;
    }
}

?>

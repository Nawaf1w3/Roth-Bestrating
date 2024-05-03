<?php

// Include PHPMailer library and other necessary files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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

    $telefoon = $_POST['telefoon'];
        if (!preg_match("/^06\d{8}$/", $telefoon)) {
            $errors['telefoon'] = "Invalid phone number format";
        }
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
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        }
        $opmerking = $_POST['opmerking'];

        // Process uploaded file
        if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
            $tmpFilePath = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
        }

        // Email details
        
        $to = "nnauaf60@gmail.com"; // Temporary email for testing
        $subject = "Bestratingbedrijf Roth";
        $message = "<p style='font-family: Arial, sans-serif; font-size: 24px;'>Uw klant heeft een vraag op Bestratingbedrijf Roth: <br><br></p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Klant naam</strong><br>$voornaam $achternaam</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Telefoon</strong><br> $telefoon</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Adres</strong><br> $adres</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Email</strong><br> $email</p>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'><strong>Opmerking</strong><br>$opmerking</p><br>
            <p style='font-family: Arial, sans-serif; font-size: 16px;'>Met vriendelijke groeten,<br> Uw Website.</p>";

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

            // Attach file if uploaded
            if(isset($_FILES['formFile']) && $_FILES['formFile']['error'] === UPLOAD_ERR_OK) {
                $file_name = $_FILES['formFile']['name'];
                $temp_path = $_FILES['formFile']['tmp_name'];
                
                // Add the file as an attachment to the email
                $mail->addAttachment($temp_path, $file_name);
            }
            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;

            // Send email
            $mail->send();

            // Send success response
            $response = [
                'success' => true
            ];
            echo json_encode($response);
            exit; // Terminate the script
        } catch (Exception $e) {
            // Send error response
            $response = [
                'success' => false,
                'message' => 'An error occurred while sending the email.'
            ];
            echo json_encode($response);
            exit; // Terminate the script
        }
    } else {
        // Send error response with validation errors
        echo json_encode([
            'success' => false,
            'errors' => $errors
        ]);
        exit; // Terminate the script
    }
}

// Your HTML code starts here
?>

<?php
// Start session to store error messages
session_start();

// Initialize error array
$errors = [];

// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and validate name
    $name = trim($_POST['name'] ?? '');
    if (empty($name)) {
        $errors[] = "Name is required";
    } elseif (strlen($name) < 2) {
        $errors[] = "Name must be at least 2 characters";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors[] = "Name can only contain letters and spaces";
    }
    
    // Sanitize and validate email
    $email = trim($_POST['email'] ?? '');
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    // Sanitize phone (optional field)
    $phone = trim($_POST['phone'] ?? '');
    if (!empty($phone) && !preg_match("/^[0-9\-\+\(\)\s]+$/", $phone)) {
        $errors[] = "Invalid phone number format";
    }
    
    // Sanitize and validate message
    $message = trim($_POST['message'] ?? '');
    if (empty($message)) {
        $errors[] = "Message is required";
    } elseif (strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters";
    }
    
    // If there are errors, redirect back to form
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_data'] = $_POST;
        header("Location: index.html");
        exit();
    }
    
    // === NO ERRORS: Process the form ===
    
    // Prepare email
    $to = "your-email@example.com"; // Change this to your email
    $subject = "New Contact Form Submission from " . $name;
    
    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Phone: " . ($phone ?: "Not provided") . "\n\n";
    $email_body .= "Message:\n" . $message . "\n";
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Send email (Note: may not work on localhost without mail server)
    $mail_sent = mail($to, $subject, $email_body, $headers);
    
    // Log submission to a file (useful for testing)
    $log_entry = date('Y-m-d H:i:s') . " | Name: $name | Email: $email | Message: " . substr($message, 0, 50) . "...\n";
    file_put_contents('submissions.log', $log_entry, FILE_APPEND);
    
    // Redirect to thank you page
    header("Location: thank-you.php");
    exit();
    
} else {
    // If someone tries to access this file directly, redirect to form
    header("Location: index.html");
    exit();
}
?>
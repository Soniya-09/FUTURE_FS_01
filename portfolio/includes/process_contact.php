<?php
require_once '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }
    
    // Insert into database
    $sql = "INSERT INTO messages (name, email, message, created_at) 
            VALUES ('$name', '$email', '$message', NOW())";
    
    if (mysqli_query($conn, $sql)) {
        // Prepare email
        $to = "pawarsoniya0209@gmail.com"; // Your Gmail address
        $subject = "New Contact Form Message from $name";
        $body = "You have received a new message from your portfolio website:\n\n"
              . "Name: $name\n"
              . "Email: $email\n"
              . "Message:\n$message\n";
        $headers = "From: $email\r\nReply-To: $email";

        // Send email
        mail($to, $subject, $body, $headers);
        
        // Redirect back with success message
        header("Location: ../index.php?status=success#contact");
    } else {
        // Redirect back with error message
        header("Location: ../index.php?status=error#contact");
    }
} else {
    // If not POST request, redirect to home
    header("Location: ../index.php");
}
?>
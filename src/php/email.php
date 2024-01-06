<?php
if(isset($_POST['submit'])){
    $to = $_POST['email'];
    $subject = "Email Received";
    $message = "Thank you for your email. We have received your details.";
    $headers = "From: sudinihemanth@gmail.com";
    
    // Send email to user
    mail($to, $subject, $message, $headers);
    
    // Notify sudinihemanth@gmail.com
    mail("sudinihemanth@gmail.com", "New Email Received", "A new email has been received with the following details:\n\nFirst Name: ".$_POST['first-name']."\nLast Name: ".$_POST['last-name']."\nEmail: ".$_POST['email']."\nMessage: ".$_POST['Message']);
}
?>

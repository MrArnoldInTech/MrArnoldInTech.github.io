<?php
// if (isset($_POST['email']) && !empty($_POST['email'])) {
// $subject = "New contact request: $_POST['subject']";
// $message = $_POST['body'];
// $headers = 'From: info@website.com' . "\r\n" .
//            'Reply-To: ' . $_POST['email']. "\r\n" .
//            'X-Mailer: PHP/' . phpversion();

// mail('info@example.com', $subject, $message, $headers);

// die('Thank you for your email');
// }


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "ArnieFruish@yahoo.co.nz";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;
   
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
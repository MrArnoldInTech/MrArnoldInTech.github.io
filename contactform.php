<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "Arnold@arnoldfruish.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an Email from First Name: ".$firstname." and Last Name: $lastname and their email is $mailFrom.  
    \nSubject: $subject \n\nMessage Response:\n\n$message \n\nFirst Name: $firstname \nLast Name: $lastname \nSubject: $subject \nEmail: $mailFrom\n\nFrom ArnoldFruish.com Website - Message Contact Form";
    
    mail($mailTo, $subject, $txt, $headers);
    // header("Location: index.html?mailsend_Thank_you_for_your_Message");
    header("Location: Thankyouformessage.html?");
}

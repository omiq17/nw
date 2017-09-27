<?php
if(isset($_POST['submit'])){
    $myemail = 'Omar@NorthwestRemodeling.net';//<-----Put Your email address here.

    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = $myemail;
    $email_subject = $subject;
    $email_body = $message;
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    // echo $to,$email_subject, $email_body, $headers;
    // die();
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: contact-confirm.html');
};
?>

<?php 

    $email = $_POST["email"];
    $message = $_POST["message"];
    $error = '';

    if (trim($email) == '') {
        $error = 'Please, insert your email address';
    } else if (trim($message) == '') {
        $error = 'Please, insert some text here';
    } else if (strlen($message) > 250) {
        $error = 'Message is too long'; 
    } 

    if ($error != '') {
        echo $error;
        exit();
    }

    $subject = "=?utf-8?B?".base64_encode("Message from form")."?=";
    $header = "From: $email\r\nReply-to: $email\r\n\Content-type: text/html;charset=utf-8\r\n";

    mail($email, $subject, $message, $header);

    header('Location:/about.php');
?>
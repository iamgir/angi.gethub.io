<?php
    $name = $_Post['name'];
    $vister_email = $_Post['email'];
    $message = $_Post['message'];


    $email_from = 'adkhuon@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                        "User Email: $vistor_email.\n".
                            "User Message: $message.\n";

    $mailTo = "angiphotos.info@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
?>
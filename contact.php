<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'ruvim.gavrilchik0@gmail.com';

    $email_subjet = 'New Form Submssion';

    $email_body = 
    
        "User Name: $name.\n".
        "User Email: $visitor_email.\n".
        "User Message: $message.\n";
        
    $to "rgavrilc@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subjet,$email_body,$headers);
    header("Location: index.html");

    ?>
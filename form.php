<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'MyPortfolio'
    $email_subject = $_POST['subject']
    $email_body = "User Name: ".$name."\n".
                    "User Email: ".$visitor_email."\n".
                        "User Message: ".$message."\n";
    
    $to = "rj.rahul1908@gmail.com";
    $headers = "From: " .$email_from. "\r\n";
    $headers .= "Reply-To: ".$visitor_email."\r\n";

    @mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
    
    ?>
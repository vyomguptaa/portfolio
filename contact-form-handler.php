<?php
     $name=$_POST['name'];
     $visitor_email=$_POST['email'];
     $tel=$_POST['tel'];
     $message=$_POST['message'];
     
     $email_from="vyom.gupta.3128@gmail.com"
     $email_subject="New Form Submission"
     $email_body="Username: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Phone: $tel.\n".
                    "User Message: $message.\n";

    $to="vyomgupta31@gmail.com";
    $headers="From: $email_from \r\n";
    $headers ="Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");

?>
   

<?php

 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 $email_form = 'EasyTutorials@avinasshkr.com';

 $email_subject = "New Form Submission";

 $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                     "User Message: $message.\n";

 $to = "aminamoumen55@gmail.com";

 
 $headers = "Form: $email_form\r\n";
 $headers = "reply-to: $visitor_email\r\n"
 mail($to,$email_subject,$email_body,$headers);
 header("Location: Comments.html");
?>
<?php
$name = $_POST['name'];
$visitorEmail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailFrom = 'info@yourwebsite.com';

$emailSubject = 'New Form submission';

$emailBody = "User Name: $name.\n".
              "User Email: $visitorEmail.\n".
               "Subject: $subject.\n".
               "User Message: $message .\n";

$to = 'egboskyla@gmail.com';

$headers = "From: $emailFrom \r\n";

$headers .= "replyTo: $visitorEmail \r\n";

mail($to,$emailSubject,$emailBody,$headers);

header("Location: contact.html")

?>



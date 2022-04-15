<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$name2 = $_POST['name2'];
$address = $_POST['address'];
$date = $_POST['date'];

$email_from = 'info@hdwebsites.com';

$email_subject = 'Customer Oder';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "User Number: $number.\n".
                 "Product Name: $name2.\n". 
                  "User Address: $address.\n";
                   "User Date: $date.\n";

$to = 'dhansukhharkhani@gmail.com';

$headers = "From: $email_from \r\n";
   
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?> 
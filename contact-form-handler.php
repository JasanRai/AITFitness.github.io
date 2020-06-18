<?php
include "header.php";

$message = $_POST['message'];

    $email_from = '7179@ait.nsw.edu.au';

    $email_subject = "New Form Submission";

    $email_body = "User Name :$Firstname.\n".
                    "User Email :$Email.\n".
                    "User Message : $message.\n";

    $to = "7179@ait.nsw.edu.au";

    $headers = "From : $email_from \r\n";

    $headers .= "Reply-To : $Email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location : index.php");

?>

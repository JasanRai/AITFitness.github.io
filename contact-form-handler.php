<?php
include "server.php";

if(isset($_POST['form-control submit']))
{
 
    $message = $_POST['message'];
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];

    $mailTo = "7179@ait.nsw.edu.au";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from".$name."\n\n".$message;

    mail($mailTo, $txt, $headers);

    header("Location : index.php?mailsend");
}

?>

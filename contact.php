<?php include ("header.php"); ?>

<div class = "contact-form ">
    <form id = "contact-form" method = "post" action = "contact-form-handler.php">
        <input name = "name" type = "text" class = "form-control" placeholder= "Your Name" required>
        <br>
        <input name = "email" type = "email" class = "form-control" placeholder = "Your Email" required><br>

        <textarea name = "message" class = "form-control" placeholder = "Message" row = "4" required></textarea><br>

        <input type = "submit" class = "form-control submit" value = "SEND MESSAGE"> 
    </form>
</div>
<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $subject = "Your website.";
    $mailTo = "your_email";
    $header = "From: ".$mail;
    $txt = "You have received an email from ".$name.". \n\n".$message;

    mail($mailTo, $subject, $txt, $header);
    header("Location: index.php?mailsend");
}

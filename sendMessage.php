<?php

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $adminEmail = "";
    
    $websiteURL = "http://elvis.rowan.edu/~scavet64/awp/awp/";
    $mySiteName = "Super Cool Image Site";
    $UrlEncodedEmail = urlencode($e);
    $to = $adminEmail;
    $from = $adminEmail;
    $headers ="From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
    $subject = $mySiteName." Message Received";
        
    $msg = '<h2>From '.$email.' , '.$name.'</h2><p>This is an automated message from '.$mySiteName.'.</p>'.$message;
        if(mail($to,$subject,$msg,$headers)) {
            echo "success";
            exit();
        } else {
            echo "email_send_failed";
            exit();
        }
    exit();
}

?>
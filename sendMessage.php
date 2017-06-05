<?php

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $adminEmail = "contact@scavettapps.com";
    
    $websiteURL = "scavettapps.com";
    $mySiteName = "Scavettapps";

    $to = "vstro24@gmail.com";
    $from = $adminEmail;
    $headers ="From: contact@scavettapps.com\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
    $subject = $mySiteName." Message Received";
        
    $msg = '<h2>From '.$email.' , '.$name.'</h2><p>This is an automated message from '.$mySiteName.'.</p><p>'.$message.'</p>';
        if(mail($to,$subject,$msg,$headers)) {
            header(index.php);
            exit();
        } else {
            echo "email_send_failed";
            exit();
        }
    exit();
}

?>
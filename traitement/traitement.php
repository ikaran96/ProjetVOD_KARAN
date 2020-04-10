<?php
    
    $nom=$_POST['username'];
    $prenom=$_POST['user_firstname'];
    $subject="Nouveau message";
    $email=$_POST['user_mail'];
    $message=$_POST['user_message'];
    $headers = "From: $email" . "\r\n" .
    "CC: karan@simplon-charleville.fr";
    $to="karan@simplon-charleville.fr";


    if(isset($message)){
   
    
    mail($to,$subject,$message,$headers);
    }

    header('location:../contact.php');?>
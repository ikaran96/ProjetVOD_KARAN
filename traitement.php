<?php

  $username = !empty($_POST['username']) ? $_POST['username'] : NULL;
  $user_firstname = !empty($_POST['user_firstname']) ? $_POST['user_firstname'] : NULL;
  $user_mail = !empty($_POST['user_mail']) ? $_POST['user_mail'] : NULL;
  $user_message= !empty($_POST['user_message']) ? $_POST['user_message'] : NULL;
  $headers = "From: $username $user_firstname" . "\r\n" .
  "CC: $user_mail";

  $to = "karan@simplon-charleville.fr";
  $subject = "Nouveau message";

  mail($to,$subject, $user_message,$headers);





  header('location:index.php');

?>



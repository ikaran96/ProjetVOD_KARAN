<?php

  include ('connectBDD.php');

  $username = !empty($_POST['username']) ? $_POST['username'] : NULL;
  $user_firstname = !empty($_POST['user_firstname']) ? $_POST['user_firstname'] : NULL;
  $user_mail = !empty($_POST['user_mail']) ? $_POST['user_mail'] : NULL;
  $user_message= !empty($_POST['user_message']) ? $_POST['user_message'] : NULL;

  $sql = $bdd->prepare ("INSERT INTO Messagr (Nom, Prenom, Email, Msg)
                        VALUES (:username, :user_firstname, :user_mail, :user_message)");

  $sql->execute(array(
      'username' => $username,
      'user_firstname' => $user_firstname,
      'user_mail' => $user_mail,
      'user_message' => $user_message
  ));

  $sql-> closeCursor();
  header('location:index.php');

?>

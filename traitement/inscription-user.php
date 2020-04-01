<?php
  include ('../include/connectBDD.php');

    $nom= !empty($_POST['name_user']) ? $_POST['name_user'] : NULL;
    $prenom = !empty($_POST['firstname_user']) ? $_POST['firstname_user'] : NULL;
    $pseudo = !empty($_POST['username']) ? $_POST['username'] : NULL;
    $mdp = !empty($_POST['password_user']) ? $_POST['password_user'] : NULL;
    $mail = !empty($_POST['username_mail']) ? $_POST['username_mail'] : NULL;
    $type = !empty($_POST['type_user']) ? $_POST['type_user'] : NULL;



  
    $sql = $bdd->prepare ("INSERT INTO User (Nom, Prenom, Pseudo, Mdp, Mail, id_typeuser)
                          VALUES ( :name_user, :firstname_user, :username, :password_user, :username_mail,:type_user)");
  
    

    $hashedpass=password_hash($mdp, PASSWORD_DEFAULT);

    $sql->execute(array(
        'name_user' => $nom,
        'firstname_user' => $prenom,
        'username' => $pseudo,
        'password_user' => $hashedpass,
        'username_mail' => $mail,
        'type_user' => $type
    ));
  
    $sql-> closeCursor();
    header('location:../index.php'); 


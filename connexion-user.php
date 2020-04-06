<?php

    include ('../include/connectBDD.php');

    $username = !empty($_POST['username']) ? $_POST['username'] : NULL;
    $password = !empty($_POST['password_user']) ? $_POST['password_user'] : NULL;

    $user = $bdd->prepare ('SELECT * FROM User WHERE Pseudo="'.$username.'"');
    $user ->execute();
    
    $member = $user->fetch();

    $mdpval = password_verify($password, $member['Mdp']);



    if (!$member) {
        header('location:../connexion.php?error=login');
    } else {
        if ($mdpval) {
        session_start();
        $_SESSION['id_user'] = $member['id_user'];
        $_SESSION['Pseudo'] = $member['Pseudo'];
        $_SESSION['Mdp'] = $member['Mdp'];
        $_SESSION['id_typeuser
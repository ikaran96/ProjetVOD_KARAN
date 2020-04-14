<?php

    include ('../include/connectBDD.php');

    $username = !empty($_POST['username']) ? $_POST['username'] : NULL;
    $password = !empty($_POST['password_user']) ? $_POST['password_user'] : NULL;

    $user = $bdd->prepare ('SELECT * FROM User WHERE Pseudo=:username');
    $user ->execute(array(
        'username'=>$username
    ));
    
    $ok = $user->fetch();

    if(isset($ok['Pseudo'])){
        if($ok['Mdp']==$password){
            if($ok['id_typeuser']==2){
                session_start();
                $_SESSION['id_user']=$ok['id_user'];
                $_SESSION['Nom']=$ok['Nom'];
                $_SESSION['Prenom']=$ok['Prenom'];
                $_SESSION['Mail']=$ok['Mail'];
                $_SESSION['Pseudo']=$username;

                header('location:../admin.php');
                }
                if($ok['id_typeuser']==4){
                    session_start();
                    $_SESSION['id_user']=$ok['id_user'];
                    $_SESSION['Nom']=$ok['Nom'];
                    $_SESSION['Prenom']=$ok['Prenom'];
                    $_SESSION['Mail']=$ok['Mail'];
                    $_SESSION['Pseudo']=$username;

                    header('location:../index.php');
                    }
                
            }
        }else{
            header('location:../connexion.php?error=login');

        }
    

?>
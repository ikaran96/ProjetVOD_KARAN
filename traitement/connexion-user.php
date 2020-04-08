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
            session_start();
            $_SESSION['id_user']=$ok['id_user'];
            $_SESSION['Pseudo']=$username;
            $_SESSION['id_typeuser']='2';
            header('location:../admin.php');
                }
                if($_SESSION['id_typeuser']='4'){
                    header('location:../index.php');
                }
                else{
                    echo "mauvais mdp";
                }}
    

?>
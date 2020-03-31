<?php

include 'connectBDD.php';

$pseudo = !empty($_POST['username']) ? $_POST['username'] : NULL;
$mdp = !empty($_POST['password_user']) ? $_POST['password_user'] : NULL;

$query = "SELECT * FROM User WHERE Pseudo = :username AND Mdp = :password_user";
$stmt=$bdd->prepare($query);
$stmt->execute(

    array(

        'username' => $pseudo,
        'password_user' => $mdp



    )


    );

   $count = $stmt->rowCount();


   if($count > 0){
       $_SESSION["username"] = $pseudo;
       header("location:index.php");
   } else {
       $msg = '<label>Username or Password is wrong </label>';
   };
  

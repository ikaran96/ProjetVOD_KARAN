<?php
session_start();

  include ('../include/connectBDD.php');

  $id_film=$_GET['id'];
  $id_user= $_SESSION['id_user'];
   

  $sql = $bdd->prepare ("INSERT INTO favoris (id_film, id_user)
                        VALUES ( $id_film, $id_user)");

  $sql->execute([$id_film, $id_user]);

  $sql-> closeCursor();
  header('location:../catalogue.php'); 

?>

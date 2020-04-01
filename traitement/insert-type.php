<?php

include ('../include/connectBDD.php');
$type = !empty($_POST['typeuser']) ? $_POST['typeuser'] : NULL;

$sql = $bdd->prepare ("INSERT INTO TypeUser (Nom)
                        VALUES (:typeuser)");

  $sql->execute(array(
      'typeuser' => $type
      ));

  $sql-> closeCursor();
  header('location:../admin.php'); 



?>
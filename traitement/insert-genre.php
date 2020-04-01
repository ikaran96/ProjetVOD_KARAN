<?php

  include ('../include/connectBDD.php');

  $genre = !empty($_POST['nom_genre']) ? $_POST['nom_genre'] : NULL;
 

  $sql = $bdd->prepare ("INSERT INTO Genre (genre)
                        VALUES ( :nom_genre)");

  $sql->execute(array(
      'nom_genre' => $genre,
      
  ));

  $sql-> closeCursor();
  header('location:../admin.php'); 

?>

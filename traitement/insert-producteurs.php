<?php

include ('../include/connectBDD.php');

  $nom = !empty($_POST['nom_prod']) ? $_POST['nom_prod'] : NULL;
  $prenom = !empty($_POST['prenom_prod']) ? $_POST['prenom_prod'] : NULL;
  

  $sql = $bdd->prepare ("INSERT INTO Producteur (Nom, Prenom)
                        VALUES (:nom_prod, :prenom_prod)");

  $sql->execute(array(
      'nom_prod' => $nom,
      'prenom_prod' => $prenom
      ));

  $sql-> closeCursor();
  header('location:../admin.php'); 

?>

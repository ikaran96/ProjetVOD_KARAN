<?php

  include ('connectBDD.php');

  $nom = !empty($_POST['nom_real']) ? $_POST['nom_real'] : NULL;
  $prenom = !empty($_POST['prenom_real']) ? $_POST['prenom_real'] : NULL;
  

  $sql = $bdd->prepare ("INSERT INTO Realisateur (Nom, Prenom)
                        VALUES (:nom_real, :prenom_real)");

  $sql->execute(array(
      'nom_real' => $nom,
      'prenom_real' => $prenom
      ));

  $sql-> closeCursor();
  header('location:admin.php');

?>

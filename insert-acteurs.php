<?php

  include ('connectBDD.php');

  $nom = !empty($_POST['nom_acteur']) ? $_POST['nom_acteur'] : NULL;
  $prenom = !empty($_POST['prenom_acteur']) ? $_POST['prenom_acteur'] : NULL;
  

  $sql = $bdd->prepare ("INSERT INTO Acteur (Nom, Prenom)
                        VALUES (:nom_acteur, :prenom_acteur)");

  $sql->execute(array(
      'nom_acteur' => $nom,
      'prenom_acteur' => $prenom
      ));

  $sql-> closeCursor();
  header('location:admin.php');

?>

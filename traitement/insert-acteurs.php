<?php

include ('../include/connectBDD.php');

  $nom = !empty($_POST['nom_acteur']) ? $_POST['nom_acteur'] : NULL;
  $prenom = !empty($_POST['prenom_acteur']) ? $_POST['prenom_acteur'] : NULL;
  $image = !empty($_POST['img_acteur']) ? $_POST['img_acteur'] : NULL; 
  $origine = !empty($_POST['origine_acteur']) ? $_POST['origine_acteur'] : NULL;
  

  $sql = $bdd->prepare ("INSERT INTO Acteur (Nom, Prenom, Origine, image_acteur)
                        VALUES (:nom_acteur, :prenom_acteur, :origine_acteur, :img_acteur)");

  $sql->execute(array(
      'nom_acteur' => $nom,
      'prenom_acteur' => $prenom,
      'origine_acteur' => $origine,
      'img_acteur' =>$image
      ));

  $sql-> closeCursor();
  header('location:../admin.php'); 

?>

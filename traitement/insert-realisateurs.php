<?php

include ('../include/connectBDD.php');

  $nom = !empty($_POST['nom_real']) ? $_POST['nom_real'] : NULL;
  $prenom = !empty($_POST['prenom_real']) ? $_POST['prenom_real'] : NULL;
  $img = !empty($_POST['img_real']) ? $_POST['img_real'] : NULL;
  $resume = !empty($_POST['resume_real']) ? $_POST['resume_real'] : NULL;
  

  $sql = $bdd->prepare ("INSERT INTO Realisateur (Nom_real, Prenom_real, Image_real, Resume_real)
                        VALUES (:nom_real, :prenom_real, :img_real, :resume_real)");

  $sql->execute(array(
      'nom_real' => $nom,
      'prenom_real' => $prenom,
      'img_real'=>$img,
      'resume_real'=>$resume
      ));

  $sql-> closeCursor();
  header('location:../admin.php'); 

?>

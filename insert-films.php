<?php

  include ('connectBDD.php');

  $titre = !empty($_POST['titre']) ? $_POST['titre'] : NULL;
  $affiche = !empty($_POST['affiche']) ? $_POST['affiche'] : NULL;
  $synopsis = !empty($_POST['synopsis']) ? $_POST['synopsis'] : NULL;
  $duree = !empty($_POST['duree']) ? $_POST['duree'] : NULL;
  $sortie = !empty($_POST['sortie']) ? $_POST['sortie'] : NULL;
  $note = !empty($_POST['note']) ? $_POST['note'] : NULL;
  $ba = !empty($_POST['ba']) ? $_POST['ba'] : NULL;

  $sql = $bdd->prepare ("INSERT INTO Film (Titre, Affiche, Synopsis, Duree, Sortie, Note, BA)
                        VALUES ( :titre, :affiche, :synopsis, :duree, :sortie, :note, :ba)");

  $sql->execute(array(
      'titre' => $titre,
      'affiche' => $affiche,
      'synopsis' => $synopsis,
      'duree' => $duree,
      'sortie' => $sortie,
      'note' => $note,
      'ba' => $ba
  ));

  $sql-> closeCursor();
  header('location:admin.php');

?>

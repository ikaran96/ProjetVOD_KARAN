<?php
  include ('../include/connectBDD.php');

  $film = !empty($_POST['id_film']) ? $_POST['id_film'] : NULL;
  $acteur = !empty($_POST['id_acteur']) ? $_POST['id_acteur'] : NULL;

$sql = $bdd->prepare("INSERT INTO jouer (id_acteur, id_film) VALUES (:id_acteur, :id_film)");
$sql->execute(array(

'id_film' => $film,
'id_acteur' => $acteur
));

$sql-> closeCursor();
header('location:../admin.php');
?>
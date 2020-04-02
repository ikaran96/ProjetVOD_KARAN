<?php
//REAL FILMS

include ('../include/connectBDD.php');
$film = !empty($_POST['id_film']) ? $_POST['id_film'] : NULL;
$real= !empty($_POST['id_realisateur']) ? $_POST['id_realisateur'] : NULL;

$sql = $bdd->prepare("INSERT INTO realiser (id_realisateur, id_film) VALUES (:id_realisateur, :id_film)");
$sql->execute(array(

'id_realisateur' => $real,
'id_film' => $film
));

$sql-> closeCursor();
header('location:../admin.php');
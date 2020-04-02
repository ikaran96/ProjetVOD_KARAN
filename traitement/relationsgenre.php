<?php
// GENRES FILMS
include ('../include/connectBDD.php');
$film = !empty($_POST['id_film']) ? $_POST['id_film'] : NULL;
$genre = !empty($_POST['id_genre']) ? $_POST['id_genre'] : NULL;

$sql = $bdd->prepare("INSERT INTO est2 (id_genre, id_film) VALUES (:id_genre, :id_film)");
$sql->execute(array(

'id_film' => $film,
'id_genre' => $genre
));

$sql-> closeCursor();
header('location:../admin.php');
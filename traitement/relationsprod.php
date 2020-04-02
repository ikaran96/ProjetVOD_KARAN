<?php

//PROD FILMS
include ('../include/connectBDD.php');
$film = !empty($_POST['id_film']) ? $_POST['id_film'] : NULL;
$prod = !empty($_POST['id_producteur']) ? $_POST['id_producteur'] : NULL;

$sql = $bdd->prepare("INSERT INTO produire (id_producteur, id_film) VALUES (:id_producteur, :id_film)");
$sql->execute(array(

'id_film' => $film,
'id_producteur' => $prod
));

$sql-> closeCursor();
header('location:../admin.php');
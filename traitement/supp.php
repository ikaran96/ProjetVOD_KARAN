<?php
include '../include/connectBDD.php';

$id_film=$_GET['id'];

$del=$bdd->prepare("DELETE FROM  est2 WHERE id_film=".$id_film);
$del->execute();
$del=$bdd->prepare("DELETE FROM realiser WHERE id_film=".$id_film);
$del->execute();
$del=$bdd->prepare("DELETE FROM jouer WHERE id_film=".$id_film);
$del->execute();
$del=$bdd->prepare("DELETE FROM Film WHERE id_film=".$id_film);
$del->execute();
header('location:../admin.php');
?>



<?php
include '../include/connectBDD.php';

$id_acteur=$_GET['id'];

$del=$bdd->prepare("DELETE FROM  jouer WHERE id_acteur=".$id_acteur);
$del->execute();
$del=$bdd->prepare("DELETE FROM Acteur WHERE id_acteur=".$id_acteur);
$del->execute();
header('location:../admin.php');
?>



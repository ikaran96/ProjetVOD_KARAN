<?php
include '../include/connectBDD.php';

$id_genre=$_GET['id'];

$del=$bdd->prepare("DELETE FROM  est2 WHERE id_genre=".$id_genre);
$del->execute();
header('location:../admin.php');
?>



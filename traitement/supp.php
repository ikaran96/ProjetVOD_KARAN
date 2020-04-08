<?php

include '../include/connectBDD.php';

$id_film=$_GET['id'];
$delete=$bdd->prepare('DELETE FROM Film WHERE id_film='.$id_film);
$delete->execute();
header('Location: admin.php');?>
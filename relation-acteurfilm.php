<?php
include 'connectBDD.php';

$req = $bdd->prepare("SELECT id_acteur, id_film FROM Acteur, Film WHERE id_acteur = id_film");
           $req->execute();


?>
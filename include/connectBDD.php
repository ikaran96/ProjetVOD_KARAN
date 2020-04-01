<?php
try   {
  $user = "dbu167304";
  $pass = "2p4!Z^Xf";
  // Je me connecte à ma bdd
  $bdd = new PDO('mysql:host=db5000303643.hosting-data.io;dbname=dbs296630;charset=utf8', $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}


?>

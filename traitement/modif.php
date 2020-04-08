<?php 

include '../include/connectBDD.php';

$id_film=$_GET['id'];

?>
<form class="form-contact" action="traitement/modif-film.php" method="post">
<h2 class="contactez-nous">Modifier film</h2>

<div class="info_form">
<?php 
$req=$bdd->prepare("SELECT * FROM Film WHERE id_film=".$id_film);
$req->execute();
$modif=$req->fetch();?>

<h3><?php echo $modif['Titre'];?></h3>


    <input class="input-contact" type="text" id="titre" name="titre" placeholder="titre" value="<?php echo $modif['Titre'];?>">


    <textarea class="input-contact" type="text" id="synopsis" name="synopsis" placeholder="synopsis"><?php echo $modif['Synopsis'];?> </textarea>

    <input class="input-contact" type="text" id="sortie" name="sortie" placeholder="sortie" value="<?php echo $modif['Sortie'];?>">

    <input class="input-contact" type="text" id="note-film" name="note-film" placeholder="note-film" value="<?php echo $modif['Note'];?>">


    <div class="button">
        <button class="button_form" type="submit">Envoyer</button>
    </div>
</div>




</form>


<style>
    body {
        font-family: Arial;
        margin: 0;
        padding: 0;
        background-color: white;
    }

    .form-contact {
        width: 80%;
        background-color: lightgrey;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        border-radius: 25px;
        margin-top: 50px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    
select{
    width: 80%;
        border: 5px solid black;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 20px;
}

    .input-contact {
        width: 80%;
        border: 5px solid black;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 20px;

    }

    h2 {

        font-weight: 900;
    }

    textarea {
        height: 200px;
        font-family: Arial;
    }

    .button_form {
        background-color: white;
        border: 10px solid white;
        margin-bottom: 20px;
    }

    .button_form:hover {
        cursor: pointer;
        background-color: black;
        color: white;
        border: 10px solid black;
    }

    a {

        text-decoration: none;
        color: black;
        font-weight:900;
        font-size:30px;
    }


    a:hover {
        color: white;
    }
    select{
        width:80%;
        color:black;
        margin-bottom:30px;
    }

    p{
        width:100%;
    }

    @media only screen and (min-width:1000px) {
        .form-contact {
            width: 50%;
        }

    }
</style>


<?php 

include '../include/connectBDD.php';

$id_film=$_GET['id'];

?>
<form class="form-contact" action="" method="post">
    <h2 class="contactez-nous">Modifier film</h2>

    <div class="info_form">
        <?php 
$req=$bdd->prepare("SELECT * FROM Film WHERE id_film=".$id_film);
$req->execute();
$modif=$req->fetch();?>

        <h3><?php echo $modif['Titre'];?></h3>

        <p>(Cliquez sur le genre pour le supprimer)</p>
          
        <?php
            $est=$bdd->prepare("SELECT * FROM est2 WHERE id_film=".$id_film);
            $est->execute();
            while($est2=$est->fetch()){

            $req5 = $bdd->prepare(" SELECT * FROM Genre WHERE id_genre=".$est2['id_genre']);
            $req5->execute();
            while ( $donnees = $req5->fetch() ){ ?>
             <p><a href="supp-genre.php?id=<?php echo $donnees['id_genre'];?>"><?php echo $donnees['genre'];?></a></p>
            <?php  }}    ?>


        <input class="input-contact" type="text" id="titre" name="titre" placeholder="titre"
            value="<?php echo $modif['Titre'];?>">


        <textarea class="input-contact" type="text" id="synopsis" name="synopsis"
            placeholder="synopsis"><?php echo $modif['Synopsis'];?> </textarea>

        <input class="input-contact" type="text" id="sortie" name="sortie" placeholder="sortie"
            value="<?php echo $modif['Sortie'];?>">

        <input class="input-contact" type="text" id="notefilm" name="notefilm" placeholder="notefilm"
            value="<?php echo $modif['Note'];?>">

        <input class="input-contact" type="text" id="duree" name="duree" placeholder="Duree"
            value="<?php echo $modif['Duree'];?>">

        
         


           
           <select name="genre" id="genre">
            <?php
            $change = $bdd->prepare(" SELECT * FROM Genre");
            $change->execute();
            while ( $changer = $change->fetch() ){ ?>
            <option value="<?= $changer['id_genre']; ?>"> <?= $changer['genre']; ?>  </option>
              
                
            <?php }?>
            </select>
           
            




        <div class="button">
            <button class="button_form" type="submit">Envoyer</button>
        </div>
    </div>

    <a href="../admin.php">Retour</a>




</form>
<?php
$titre = $_POST['titre'];
$synopsis = $_POST['synopsis'];
$sortie =$_POST['sortie'];
$notefilm = $_POST['notefilm'];
$duree =$_POST['duree'];
$genre=$_POST['genre'];

if(!empty($titre)){
    $req=$bdd->prepare("UPDATE Film SET Titre = ? WHERE id_film=$id_film");
    $req->execute([$titre]);
}

if(!empty($synopsis)){
    $req=$bdd->prepare("UPDATE Film SET Synopsis = ? WHERE id_film=$id_film");
    $req->execute([$synopsis]);
}


if(!empty($sortie)){
    $req=$bdd->prepare("UPDATE Film SET Sortie = ? WHERE id_film=$id_film");
    $req->execute([$sortie]);
}


if(!empty($notefilm)){
    $req=$bdd->prepare("UPDATE Film SET Note = ? WHERE id_film=$id_film");
    $req->execute([$notefilm]);
}


if(!empty($duree)){
    $req=$bdd->prepare("UPDATE Film SET Duree = ? WHERE id_film=$id_film");
    $req->execute([$duree]);
}

if(!empty($genre)){
    $req=$bdd->prepare("INSERT INTO est2 (id_genre, id_film)
                         VALUES ($genre, $id_film)");
    $req->execute(([$genre]));
}



  




header("location:../admin.php");?>
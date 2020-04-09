<style>
    body{
        font-family: Arial;
        margin:0;
        padding:0;
        background-color:white;
    }

    .form-contact{
        width:80%;
        background-color:lightgrey;
        margin-left:auto;
        margin-right:auto;
        text-align:center;
        border-radius:25px;
        margin-top:50px;
        padding-top:20px;
        padding-bottom:20px;
    }

    .input-contact{
        width:80%;
        border:5px solid black;
        margin-top:30px;
        margin-bottom:30px;
        padding:20px;
      
    }

    h2{
    
        font-weight:900;
    }

    textarea{
        height:200px;
        font-family: Arial;
    }

    .button_form{
        background-color:white;
        border:10px solid white;
        margin-bottom:20px;
    }

    .button_form:hover{
        cursor:pointer;
        background-color:black;
        color:white;
        border:10px solid black;}

   a{
    
       text-decoration:none;
       color:black;
   }   

   
   a:hover{
       color:white;
   }

 @media only screen and (min-width:1000px){
    .form-contact{
        width:50%;
    }

 }       
</style>
<?php 
include '../include/connectBDD.php';
$id_acteur=$_GET['id'];

?>
<form class="form-contact" action="" method="post">
<h2 class="contactez-nous">Modifier acteur</h2>

<div class="info_form">
<?php 
$req=$bdd->prepare("SELECT * FROM Acteur WHERE id_acteur=".$id_acteur);
$req->execute();
$modif=$req->fetch();?>

<h3><?php echo $modif['Prenom'];?> <?php echo $modif['Nom'];?></h3>


    <input class="input-contact" type="text" id="prenom" name="prenom" placeholder="Prénom" value="<?php echo $modif['Prenom'];?>">

    <input class="input-contact" type="text" id="nom" name="nom" placeholder="Nom" value="<?php echo $modif['Nom'];?>">

    <input class="input-contact" type="text" id="pays" name="pays" placeholder="Pays" value="<?php echo $modif['Origine'];?>">






    <div class="button">
        <button class="button_form" type="submit">Envoyer</button>
    </div>
</div>

<a href="../admin.php">Retour</a>




</form>
<?php

$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
$origine = !empty($_POST['pays']) ? $_POST['pays'] : NULL;


if(!empty($nom)){
    $req=$bdd->prepare("UPDATE Acteur SET Nom = ? WHERE id_acteur=$id_acteur");
    $req->execute([$nom]);
}

if(!empty($prenom)){
    $req=$bdd->prepare("UPDATE Acteur SET Prenom = ? WHERE id_acteur=$id_acteur");
    $req->execute([$prenom]);
}

if(!empty($origine)){
    $req=$bdd->prepare("UPDATE Acteur SET Origine = ? WHERE id_acteur=$id_acteur");
    $req->execute([$origine]);
}

  


header("location:../admin.php");?>


<?php
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
include ('include/connectBDD.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parasite</title>

    <!--SLICK-->

    <link rel="stylesheet" type="text/css" href="slick\slick\slick.css" />
    <link rel="stylesheet" type="text/css" href="slick\slick\slick-theme.css" />

    <!--CSS-->

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />


    <!--GOOGLE FONTS-->

    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Bellota+Text:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700,800,900|Quicksand:300,400,500,600,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>

<body>
<!--TOGGLE MOBILE-->

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
        <div></div>
    </div>
    <div class="menu">
        <div>
            <div>
                <ul>
                    <Li><a href="catalogue.php">Films</a></Li>
                    <Li><a href="connexion.php">Connexion</a></Li>
                    <Li><a href="contact.php">Contact</a></Li>
                        <div class="liens-couleurs">

                    <li>
                        <div class="style_axel"><a href="<?php echo $actuel; ?>?style=../css/index.css"></a>
                            <div>
                    </li>
                    <li>
                        <div class="style_pol"><a href="<?php echo $actuel; ?>?style=../pol/index2.css"></a></div>
                    </li>
                    <li>
                        <div class="style_steven"><a href="<?php echo $actuel; ?>?style=../steven/index3.css"></a></div>
                    </li>
                    <li>
                        <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=../axel/index4.css"></a></div>
                    </li>
                    </div>



                    <form action="">
                        <input type="text" placeholder="" name="search">
                        <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                    </form>

                </ul>
            </div>
        </div>
    </div>

</div>


<!--TITRE-->

<div class="title-dada">
    <h1> <a href="index.php"> ALLO SIMPLON</a></h1>
</div>


<!--NAV BAR-->

<div class="nav-dada">
    <div class="logo-dada">
        <h1><a class="lien-home" href="index.php">ALLO SIMPLON</a> </h1>
    </div>
    <div class="menu-nav">
        <form class="search-bar" action="">
            <input type="text" placeholder="" name="search">
            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="menu-dada">

            <ul>

                <li>
                    <div class="style_axel"><a href="<?php echo $actuel; ?>?style=axel/index4.css"></a>
                        <div>
                </li>
                <li>
                    <div class="style_pol"><a href="<?php echo $actuel; ?>?style=pol/index2.css"></a></div>
                </li>
                <li>
                    <div class="style_steven"><a href="<?php echo $actuel; ?>?style=steven/index3.css"></a></div>
                </li>
                <li>
                    <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=index.css"></a></div>
                </li>
                <li><a href="catalogue.php">Films</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="inscription.php">S'inscrire</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="vide"></div>




<?php 
  $id=$_GET['id'];
            $req = $bdd ->prepare("SELECT * FROM Film WHERE id_film = $id");
            $req->execute();
            while($donnees = $req->fetch())
            
            {?>
<h2 class="page-film"><?php echo $donnees['Titre'];?></h2>

    <!--SYNOPSIS-->

    <div class="img-resume">
        <img class="img-film" src="./img/parasite.jpg" alt="">
        
        <div class="synop">
                <p class="synop-title">Synopsis</p>
                <?php echo $donnees['Synopsis'];?>
        </div>
    </div>


<!--INFO FILM-->


<div class="rond-titre">Résumé</div>

<h3 class="info-film"></h3>

<div class="ronds-info">

    <div class="ronds-bis">
        <div class="ronds-ronds">
           <?php echo $donnees['Duree'];?>
        </div>
        Durée
    </div>


    <div class="ronds-bis">
        <div class="ronds-ronds">
        <?php echo $donnees['Note'];?>/5
        </div>
        Note
    </div>


    <div class="ronds-bis">
        <div class="ronds-ronds">
        <?php echo $donnees['Sortie'];?>
        </div>
        Date de sortie
    </div>


</div>


<!--Liste acteurs-->


<div class="acteurs-titre">Acteurs</div>

<section class="liste-acteurs">
    <div class="acteur">
        <img class="img-acteur" src="./img/acteur1.jfif" alt="">
        <div><?php echo $donnees['Nom'];?><?php echo $donnees['Prenom'];?></div>
    </div>

    <div class="acteur">
        <img class="img-acteur" src="./img/acteur2.jfif" alt="">
        <div>Park So-dam</div>
    </div>

    <div class="acteur">
        <img class="img-acteur" src="./img/acteur3.jfif" alt="">
        <div>Choi Woo-sik</div>
    </div>

    <div class="acteur">
        <img class="img-acteur" src="./img/acteur4.jfif" alt="">
        <div>Jung Ji-so</div>
    </div>

    <div class="acteur">
        <img class="img-acteur" src="./img/acteur5.jfif" alt="">
        <div>Song Kang-ho</div>
    </div>

    <div class="acteur">
        <img class="img-acteur" src="./img/acteur6.jfif" alt="">
        <div>Lee Sun Gyun</div>
    </div>

</section>


 <!--REAL BA-->

 <div class="real-real">Réalisateur</div>

<div class="real-ba">


    

    <div class="real">
        <div class="img-real">
            <img src="./img/real.jfif" alt="">
            <div>Bong Joon Ho</div>
        </div>
        <div class="text-real">
            Pour son film Parasite, il remporte la Palme d'or au festival de Cannes 2019, puis en 2020, le prix du
            meilleur film en langue étrangère aux Golden Globes, quatre Oscars (meilleur scénario original, meilleur
            film international, meilleur réalisateur, et meilleur film) et le César du meilleur film étranger.
        </div>
    </div>

    <div class="ba-yt">
    <?php echo $donnees['BA'];?>
    </div>

</div>

        <?php } ?>


<!--FOOTER-->

<footer>
    <div class="col-footer">
        <div class="sous-footer">
            <p>
                <h3 class="title-footer">A propos d'Allo Simplon</h3>
                   <a class="liens-footer" href="#">Qui sommes-nous ?</a> <br>
                   <a class="liens-footer" href=""> Allo Simplon recrute </a> <br>
                   <a class="liens-footer" href=""> Contactez-nous </a> <br>
            </p>
        </div>

        <div class="sous-footer">

            <p>
                <h3 class="title-footer">Aide</h3>
                   <a class="liens-footer" href=""> Mon compte</a> <br>
                   <a class="liens-footer" href=""> Forfaits </a><br> 
                   <a class="liens-footer" href=""> Facturation</a> <br>



            </p>

        </div>

        <div class="sous-footer">

            <p>
                <h3 class="title-footer">Mentions</h3>
               <a class="liens-footer" href=""> Mentions légales </a> <br>
                <a class="liens-footer" href=""> Conditions d'utlisation </a> <br> 
               <a class="liens-footer" href="">Confidentialité</a>  <br>


            </p>
        </div>
    </div>


    <div class="copy">© 2020 Allo Simplon Tous droits réservés.</div>

</footer>
   
</body>

</html>
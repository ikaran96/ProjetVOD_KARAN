<?php
session_start();
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
include ('include/connectBDD.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


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
                                <div class="style_pol"><a href="<?php echo $actuel; ?>?style=../pol/index2.css"></a>
                                </div>
                            </li>
                            <li>
                                <div class="style_steven"><a
                                        href="<?php echo $actuel; ?>?style=../steven/index3.css"></a></div>
                            </li>
                            <li>
                                <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=../axel/index4.css"></a>
                                </div>
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

   <ul class="new-nav">
        <div class="logo-simplon">
            <li class="li-nav"><a class="a-nav" href="index.php">ALLO SIMPLON</a></li>

        </div>

        <div class="liens-nav">

     
            <li class="li-nav"><a class="a-nav" href="catalogue.php">Catalogue</a></li>
            <li class="li-nav"><a class="a-nav" href="contact.php">Contact</a></li>
        
            <li class="dropdown">
            <?php  if(isset($_SESSION['Pseudo'])) {
                $_SESSION['id_typeuser']='2';?>
                <a class="a-nav" href="javascript:void(0)" class="dropbtn">Hello <?php echo $_SESSION['Pseudo'];?></a>
                <div class="dropdown-content">
                    <a class="a-nav" href="traitement/deconnexion.php">Se déconnecter</a>
                    <a class="a-nav" href="admin.php">Admin</a>
                </div>

            <?php } if(isset($_SESSION['Pseudo'])) {
                $_SESSION['id_typeuser']='4';?>
                                <div class="dropdown-content">
                    <a class="a-nav" href="traitement/deconnexion.php">Se déconnecter</a>
                    <a class="a-nav" href="admin.php">Dashboard</a>
                </div>

               
  
               <?php }else{ 
   

                ?>          

                
                <a class="a-nav" href="javascript:void(0)" class="dropbtn">Connexion/Inscription</a>
                <div class="dropdown-content">
                    <a class="a-nav" href="connexion.php">Se connecter</a>
                    <a class="a-nav" href="inscription.php">S'inscrire</a>

                </div>
               <?php }?>
            </li>
            <li class="dropdown themes">
                <a class="a-nav" href="javascript:void(0)" class="dropbtn">Thèmes</a>
                <div class="dropdown-content">
                    <a class="a-nav" href="<?php echo $actuel; ?>?style=index.css">Orange</a>
                    <a class="a-nav" href="<?php echo $actuel; ?>?style=steven/index3.css">Vert</a>
                    <a class="a-nav" href="<?php echo $actuel; ?>?style=axel/index4.css">Violet</a>
                    <a class="a-nav" href="<?php echo $actuel; ?>?style=pol/index2.css">Rose</a>

                </div>
            </li>
        </div>
        <form id="searchform" action="search.php" method="GET">
                <input class="search-bar" type="text" placeholder="Rechercher" name="search">
                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
            </form>

    </ul>


    <div class="vide"></div>


    <!--NOS FILMS-->


    <h2 class="axeltitreh2">Nos films</h2>

    <div class="axelcontainer">

        <!--FILTRES-->

        <div class="axelgauche">
            <h5 class="axelH5">Filtres</h5>
            <h5 class="axelgenre">Genre</h5>
            <?php 
            $filtres = $bdd ->prepare("SELECT * FROM Genre ");
            $filtres->execute();
            while($filtresresult = $filtres->fetch()){ ?>

            <div class="axelcase">
                <input type="checkbox" id="coding" name="" value="">
                <label for="coding"><?php echo $filtresresult['genre'];?></label>
            </div>

            <?php }?>
           
        </div>


        <!--CATALOGUE FILMS-->

        <div class="axeldroite">
            <?php 
            $req = $bdd ->prepare("SELECT * FROM Film");
            $req->execute();
            while($donnees = $req->fetch()){?>

            <a href="parasite.php?id=<?php echo $donnees['id_film'];?>" class="versfilm">
                <div class="cardaxel">
                    <img class="poster-img" src="img/<?php echo $donnees['Affiche'];?>" alt="">
                    <div class="titrefilm"><?php echo $donnees['Titre'];?></div>
                    <div class="infoaxel">
                        <div class="textaxel">
                            <p><?php echo $donnees['Note'];?>/5</p>
                            <p><?php echo $donnees['Duree'];?></p>


                            <?php 
                            $req2 = $bdd ->prepare("SELECT f.id_film, f.Titre, f.Affiche, f.Note, f.Duree, g.id_genre, g.genre, e.id_film, e.id_genre
                                                    FROM Film f, Genre g, est2 e 
                                                    WHERE e.id_genre = g.id_genre
                                                    AND e.id_film = f.id_film
                                                    AND e.id_film =" . $donnees['id_film']);
                            $req2->execute();
                            while($donnees2 = $req2->fetch()){ 
                            ?>

                            <p><?php echo $donnees2['genre'];?></p><?php }?>

                           
                        </div>
                    </div>
                </div>
            </a>

            <?php }?>
            
        </div>


    </div>



    <!--PARALLAX-->

    <div class="parallax-window" data-parallax="scroll" data-z-index="2" data-image-src=".\img\parallax2.jpg"></div>


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
                    <a class="liens-footer" href="">Confidentialité</a> <br>


                </p>
            </div>
        </div>


        <div class="copy">© 2020 Allo Simplon Tous droits réservés.</div>

    </footer>
</body>

</html>
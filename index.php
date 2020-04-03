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
    <title>ALLO SIMPLON</title>

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


    <!--FOTORAMA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


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
                <a class="a-nav" href="javascript:void(0)" class="dropbtn">Connexion/Inscription</a>
                <div class="dropdown-content">
                    <a class="a-nav" href="connexion.php">Se connecter</a>
                    <a class="a-nav" href="inscription.php">S'inscrire</a>
                    <a class="a-nav" href="traitement/deconnexion.php">Se déconnecter</a>

                </div>
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
        <form action="">
                <input class="search-bar" type="text" placeholder="" name="search">
                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
            </form>

    </ul>


    <div class="vide"></div>






    <!--SLIDER-->
    <div class="fotorama" data-width="100%">

        <img src="./img/banner1.jpg">

        <img src="./img/banner2.jpg">
        <img src="./img/banner3.jpg">
    </div>




    <!--AFFICHE-->

    <div class="title-dada-affiche">
        <h2>A l'affiche</h2>
    </div>

    <div class="center slider">
<?php 
$req = $bdd ->prepare("SELECT * FROM Film");
$req->execute();
while($donnees = $req->fetch()){?>

        <a class="link-poster" href="parasite.php?id=<?php echo $donnees['id_film'];?>"><img src="img/<?php echo $donnees['Affiche'];?>" alt=""></a>
<?php } ?>
    </div>





    <div class="parallax-window" data-parallax="scroll" data-z-index="1" data-image-src="img\parallax.jpeg"></div>
    <!--IMG + TXT -->

    <div class="img-txt">
        <img src="./img/imgtxt.png" alt="">
        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid illum in optio placeat porro
            ipsam
            totam, maxime sapiente ab quod at exercitationem quo culpa nemo impedit corrupti, obcaecati
            accusamus
            minima!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid illum in optio placeat
            porro ipsam
            totam, maxime sapiente ab quod at exercitationem quo culpa nemo impedit corrupti, obcaecati
            accusamus
            minima!
        </p>
    </div>
    <div class="parallax-window" data-parallax="scroll" data-z-index="1" data-image-src="img\parallax2.jpg"></div>






    <!--TARIFS-->

    <section class="tarifs-dada">

        <h2>Tarifs</h2>


        <div class="all-tarifs">

            <div class="dada-flex">

                <h3 class="titre-prix">Free</h3>
                <div class="prix-dada">
                    <p class="para-prix">
                        1 screen at a time <br>
                        Standard Definition <br>
                        Download videos on 1 phone or tablets </p>

                    <p class="gros-prix">
                        0€
                    </p>

                </div>
            </div>

            <div class="dada-flex">
                <h3 class="titre-prix">1 compte</h3>
                <div class="prix-dada">
                    <p class="para-prix">
                        2 screens at a time <br>
                        Full HD<br>
                        Download videos on 2 phones or tablets
                    </p>

                    <p class="gros-prix">
                        5€/mois
                    </p>

                </div>
            </div>

            <div class="dada-flex">
                <h3 class="titre-prix">4 comptes</h3>
                <div class="prix-dada">
                    <p class="para-prix">
                        4 screens at a time <br>
                        Full HD and Ultra HD <br>
                        Download videos on 4 phones or tablets
                    </p>

                    <p class="gros-prix">
                        10€/mois
                    </p>
                </div>
            </div>

        </div>

    </section>


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

    <script type="text/javascript" src="slick\slick\slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.center').slick({
                dots: true,
                autoplay: true,
                arrows: true,
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
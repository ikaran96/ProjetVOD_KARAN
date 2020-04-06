<?php
session_start();
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des films</title>

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
            <?php  if(isset($_SESSION['Pseudo'])){?>
                <a class="a-nav" href="javascript:void(0)" class="dropbtn">Hello <?php echo $_SESSION['Pseudo'];?></a>
                <div class="dropdown-content">
                    <a class="a-nav" href="traitement/deconnexion.php">Se déconnecter</a>
                    <a class="a-nav" href="admin.php">Admin</a>
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



    <!---------------------FORMULAIRE ADMIN----------------->

    <div class="bouttons-onglets">

        <button class="tablink" onclick="openPage('Films', this)" id="defaultOpen">Films</button>
        <button class="tablink" onclick="openPage('Acteurs', this)">Acteurs</button>
        <button class="tablink" onclick="openPage('Realisateurs', this)">Realisateurs</button>
        <button class="tablink" onclick="openPage('Producteurs', this)">Producteurs</button>
        <button class="tablink" onclick="openPage('Genres', this)">Genres</button>
        <button class="tablink" onclick="openPage('Relations', this)">Relations</button>
        <button class="tablink" onclick="openPage('Admin', this)">Admin</button>

    </div>



    <!------------------------------------AJOUT FILMS----------------------------------------------->

    <div id="Films" class="tabcontent">

        <form class="form-contact" action="traitement/insert-films.php" method="post">
            <h2 class="contactez-nous">Ajouter des films</h2>

            <div class="info_form">


               
                <input class="input-contact" type="text" id="titre" name="titre" placeholder="Titre film">


              
                <input class="input-contact" type="text" id="duree" name="duree" placeholder="Durée">


                
                <input class="input-contact" type="text" id="sortie" name="sortie" placeholder="Date de sortie">

                <input class="input-contact" type="text" id="note" name="note" placeholder="Note Allociné">

                <input class="input-contact" type="text" id="ba" name="ba" placeholder="Iframe YouTube">

                <input class="input-contact" type="text" id="affiche" name="affiche" placeholder="Affiche">


            </div>

            <div class="message_form">
               
                <textarea id="synopsis" name="synopsis" placeholder="Synopsis du film"></textarea>
            </div>


            <div class="button">
                <button class="button_form" type="submit">Envoyer</button>
            </div>
        </form>

    </div>

    <!------------------------------------AJOUT ACTEURS----------------------------------------------->


    <div id="Acteurs" class="tabcontent">
        <form class="form-contact" action="traitement/insert-acteurs.php" method="post">
            <h2 class="contactez-nous">Ajouter des acteurs</h2>

            <div class="info_form">


                <input class="input-contact" type="text" id="nom_acteur" name="nom_acteur" placeholder="Nom">


                <input class="input-contact" type="text" id="prenom_acteur" name="prenom_acteur" placeholder="Prénom">

                <input class="input-contact" type="text" id="origine_acteur" name="origine_acteur" placeholder="Origine">


                <input class="input-contact" type="text" id="img_acteur" name="img_acteur" placeholder="Image">


                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>




        </form>
    </div>

    <!------------------------------------AJOUT REALISATEURS----------------------------------------------->


    <div id="Realisateurs" class="tabcontent">
        <form class="form-contact" action="traitement/insert-realisateurs.php" method="post">
            <h2 class="contactez-nous">Ajouter des realisateurs</h2>

            <div class="info_form">


                <input class="input-contact" type="text" id="nom_real" name="nom_real" placeholder="Nom">


                <input class="input-contact" type="text" id="prenom_real" name="prenom_real" placeholder="Prénom">

                <input class="input-contact" type="text" id="img_real" name="img_real" placeholder="Nom">

                <input class="input-contact" type="text" id="resume_real" name="resume_real" placeholder="Nom">


                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>




        </form>
    </div>
    <!------------------------------------AJOUT PRODUCTEURS----------------------------------------------->


    <div id="Producteurs" class="tabcontent">

        <form class="form-contact" action="traitement/insert-producteurs.php" method="post">
            <h2 class="contactez-nous">Ajouter des producteurs</h2>

            <div class="info_form">


                <input class="input-contact" type="text" id="nom_prod" name="nom_prod" placeholder="Nom">


                <input class="input-contact" type="text" id="prenom_prod" name="prenom_prod" placeholder="Prénom">


                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>



        </form>
    </div>

    <div id="Admin" class="tabcontent">

        <form class="form-contact" action="traitement/insert-type.php" method="post">
            <h2 class="contactez-nous">Ajouter des type user</h2>

            <div class="info_form">


                <input class="input-contact" type="text" id="typeuser" name="typeuser" placeholder="Type User">


                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>
        </form>
    </div>


    <!------------------------------------AJOUT GENRES----------------------------------------------->


    <div id="Genres" class="tabcontent">
        <form class="form-contact" action="traitement/insert-genre.php" method="post">
            <h2 class="contactez-nous">Ajouter des genres</h2>

            <div class="info_form">


                <input class="input-contact" type="text" id="nom_genre" name="nom_genre" placeholder="Nom">



                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>




        </form>
    </div>

    <!---------------------------------------------------------RELATIONS-------------------------------------------------------------------->


    <div id="Relations" class="tabcontent">
        <h2 class="contactez-nous">Relations</h2>


        <form class="form-contact" action="traitement/relationsacteur.php" method="post">

         <!------------------ACTEURS/FILM--------------------->


            <h3 class="relations-titre">Ajouter des acteurs dans des films</h3>

            <fieldset>
                <select name="id_film" require>
                    <?php
                include ('include/connectBDD.php');

                $req = $bdd->prepare(" SELECT id_film, Titre FROM Film ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                    <option value="<?= $donnees['id_film']; ?>"> <?= $donnees['Titre']; ?> </option>
                    <?php  }
             ?>
                </select>


                <select name="id_acteur" require >

                    <?php
                $req2 = $bdd->prepare(" SELECT id_acteur, Nom, Prenom FROM Acteur ");
                $req2->execute();

                while ( $donnees = $req2->fetch() ){ ?>

                    <option value="<?= $donnees['id_acteur']; ?>"> <?= $donnees['Nom']; ?> <?= $donnees['Prenom']; ?> </option>
                    <?php  }
             ?>
                </select>
            </fieldset>

            <div class="button">
                <button class="button_form" type="submit">Envoyer</button>
            </div>
        </form>







<!------------------REALISATEURS/FILM--------------------->

        <form class="form-contact" action="traitement/relationsreal.php" method="post">

        

            <h3 class="relations-titre">Ajouter des réalisateurs à des films </h3>

            <fieldset>
                <select name="id_film" require>
                    <?php
                include ('include/connectBDD.php');

                $req = $bdd->prepare(" SELECT id_film, Titre FROM Film ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                    <option value="<?= $donnees['id_film']; ?>">   <?= $donnees['Titre']; ?></option>
                    <?php  }
             ?>
                </select>



                <select name="id_realisateur" require >

                    <?php
                $req3 = $bdd->prepare(" SELECT id_realisateur, Nom_real, Prenom_real FROM Realisateur ");
                $req3->execute();

                while ( $donnees = $req3->fetch() ){ ?>

                    <option value="<?= $donnees['id_realisateur']; ?>"> <?= $donnees['Nom_real']; ?> <?= $donnees['Prenom_real']; ?> </option>
                    <?php  }
             ?>
                </select>
            </fieldset>

            <div class="button">
                <button class="button_form" type="submit">Envoyer</button>
            </div>
        </form>



        <!------------------PRODCUTEURS/FILM--------------------->


        <form class="form-contact" action="traitement/relationsprod.php" method="post">
        


            <h3 class="relations-titre">Ajouter des producteurs à des films </h3>

            <fieldset>
                <select name="id_film" require>
                    <?php
                include ('include/connectBDD.php');

                $req = $bdd->prepare(" SELECT id_film, Titre FROM Film ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                    <option value="<?= $donnees['id_film']; ?>">  <?= $donnees['Titre']; ?>  </option>
                    <?php  }
             ?>
                </select>

        

                <select name="id_producteur" require  >

                    <?php
                $req4 = $bdd->prepare(" SELECT id_producteur, Nom, Prenom FROM Producteur ");
                $req4->execute();

                while ( $donnees = $req4->fetch() ){ ?>

                    <option value="<?= $donnees['id_producteur']; ?>"> <?= $donnees['Nom']; ?>  <?= $donnees['Prenom']; ?> </option>
                    <?php  }
             ?>
                </select>
            </fieldset>

            <div class="button">
                <button class="button_form" type="submit">Envoyer</button>
            </div>
        </form>






               <!------------------GENRES/FILM--------------------->

        <form class="form-contact" action="traitement/relationsgenre.php" method="post">


            <h3 class="relations-titre">Ajouter des genres à des films</h3>

            <fieldset>
                <select name="id_film" require>
                    <?php
                include ('include/connectBDD.php');

                $req = $bdd->prepare(" SELECT id_film, Titre FROM Film ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                    <option value="<?= $donnees['id_film']; ?>">  <?= $donnees['Titre']; ?> </option>
                    <?php  }
             ?>
                </select>

      

                <select name="id_genre" require  >

                    <?php
                $req5 = $bdd->prepare(" SELECT id_genre, genre FROM Genre ");
                $req5->execute();

                while ( $donnees = $req5->fetch() ){ ?>

                    <option value="<?= $donnees['id_genre']; ?>"> <?= $donnees['genre']; ?>  </option>
                    <?php  }
             ?>
                </select>
            </fieldset>

            <div class="button">
                <button class="button_form" type="submit">Envoyer</button>
            </div>
        </form>
    </div>




  


    <!-------------------------------------------------FOOTER------------------------------------------------->

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

    <script>
        function openPage(pageName, elmnt, color) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove the background color of all tablinks/buttons
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }

            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";

            // Add the specific color to the button used to open the tab content
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>

</html>
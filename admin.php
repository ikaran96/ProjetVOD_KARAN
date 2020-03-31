<?php
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

    <?php 
include 'include/nav.php'; ?>

    <div class="bouttons-onglets">

        <button class="tablink" onclick="openPage('Films', this)" id="defaultOpen">Films</button>
        <button class="tablink" onclick="openPage('Acteurs', this)">Acteurs</button>
        <button class="tablink" onclick="openPage('Realisateurs', this)">Realisateurs</button>
        <button class="tablink" onclick="openPage('Producteurs', this)">Producteurs</button>
        <button class="tablink" onclick="openPage('Admin', this)">Admin</button>

    </div>



    <!------------------------------------AJOUT FILMS----------------------------------------------->

    <div id="Films" class="tabcontent">

        <form class="form-contact" action="insert-films.php" method="post">
            <h2 class="contactez-nous">Ajouter des films</h2>

            <div class="info_form">


                <div class="infos">
                    <label class="page-contact" for="Title">Titre film</label>
                </div>
                <input class="input-contact" type="text" id="titre" name="titre" placeholder="Titre film">


                <div class="infos">
                    <label class="page-contact" for="Duree">Durée</label>
                </div>
                <input class="input-contact" type="text" id="duree" name="duree" placeholder="Durée">


                <div class="infos">
                    <label class="page-contact" class="labels" for="Date">Date de sortie </label>
                </div>
                <input class="input-contact" type="text" id="sortie" name="sortie" placeholder="Date de sortie">

                <div class="infos">
                    <label class="page-contact" class="labels" for="note">Note Allociné </label>
                </div>
                <input class="input-contact" type="text" id="note" name="note" placeholder="Note Allociné">

                <div class="infos">
                    <label class="page-contact" class="labels" for="ba">Bande Annonce </label>
                </div>
                <input class="input-contact" type="text" id="ba" name="ba" placeholder="Iframe YouTube">

                <div class="infos">
                    <label class="page-contact" class="labels" for="affiche">Affiche </label>
                </div>
                <input class="input-contact" type="text" id="affiche" name="affiche" placeholder="Affiche">


            </div>

            <div class="message_form">
                <div class="infos">
                    <label class="page-contact" for="synop">Synopsis </label>
                </div>
                <textarea id="synopsis" name="synopsis" placeholder="Synopsis du film"></textarea>
            </div>


            <div class="button">
                <button class="button_form" type="submit">Envoyer</button>
            </div>
        </form>

    </div>

    <!------------------------------------AJOUT ACTEURS----------------------------------------------->


    <div id="Acteurs" class="tabcontent">
        <form class="form-contact" action="insert-acteurs.php" method="post">
            <h2 class="contactez-nous">Ajouter des acteurs</h2>

            <div class="info_form">


                <div class="infos">
                    <label class="page-contact" for="Title">Nom</label>
                </div>
                <input class="input-contact" type="text" id="nom_acteur" name="nom_acteur" placeholder="Nom">


                <div class="infos">
                    <label class="page-contact" for="Duree">Prénom</label>
                </div>
                <input class="input-contact" type="text" id="prenom_acteur" name="prenom_acteur" placeholder="Prénom">


                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>




        </form>
    </div>

    <!------------------------------------AJOUT REALISATEURS----------------------------------------------->


    <div id="Realisateurs" class="tabcontent">
        <form class="form-contact" action="insert-realisateurs.php" method="post">
            <h2 class="contactez-nous">Ajouter des realisateurs</h2>

            <div class="info_form">


                <div class="infos">
                    <label class="page-contact" for="Title">Nom</label>
                </div>
                <input class="input-contact" type="text" id="nom_real" name="nom_real" placeholder="Nom">


                <div class="infos">
                    <label class="page-contact" for="Duree">Prénom</label>
                </div>
                <input class="input-contact" type="text" id="prenom_real" name="prenom_real" placeholder="Prénom">


                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>




        </form>
    </div>
    <!------------------------------------AJOUT PRODUCTEURS----------------------------------------------->


    <div id="Producteurs" class="tabcontent">

        <form class="form-contact" action="insert-producteurs.php" method="post">
            <h2 class="contactez-nous">Ajouter des producteurs</h2>

            <div class="info_form">


                <div class="infos">
                    <label class="page-contact" for="Title">Nom</label>
                </div>
                <input class="input-contact" type="text" id="nom_prod" name="nom_prod" placeholder="Nom">


                <div class="infos">
                    <label class="page-contact" for="Duree">Prénom</label>
                </div>
                <input class="input-contact" type="text" id="prenom_prod" name="prenom_prod" placeholder="Prénom">


                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>



        </form>
    </div>

    <div id="Admin" class="tabcontent">

        <form class="form-contact" action="insert-type.php" method="post">
            <h2 class="contactez-nous">Ajouter des type user</h2>

            <div class="info_form">


                <div class="infos">
                    <label class="page-contact" for="Type">Type user</label>
                </div>
                <input class="input-contact" type="text" id="typeuser" name="typeuser" placeholder="Type User">


                <div class="button">
                    <button class="button_form" type="submit">Envoyer</button>
                </div>
            </div>
        </form>
    </div>


    <?php 
include 'include/footer.php'; ?>

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
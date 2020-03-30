
<?php
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>


    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />


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
include 'include/nav.php';
?>


    <form class="form-contact" action="traitement.php" method="post">
        <h2 class="contactez-nous">Contactez-nous</h2>

        <div class="info_form">
            <div class="infos">
                <label class="page-contact" for="nom">Nom </label>
            </div>
            <input class="input-contact" type="text" id="name" name="username" placeholder="Nom">

            <div class="infos">
                <label class="page-contact" for="prenom">Prénom</label>
            </div>
            <input class="input-contact" type="text" id="name" name="user_firstname" placeholder="Prénom">

            <div class="infos">
                <label class="page-contact" class="labels" for="mail">E-mail </label>
            </div>
            <input class="input-contact" type="email" id="mail" name="user_mail" placeholder="E-Mail">
        </div>

        <div class="message_form">
            <div class="infos">
                <label class="page-contact" for="msg">Message </label>
            </div>
            <textarea id="msg" name="user_message"
                placeholder="Tapez votre message ici"></textarea>
            <div class="button">
                <button class="button_form" type="submit">Envoyer</button>
            </div>
        </div>

    </form>

    

</form>    

<?php
include 'include/footer.php';
 ?>    
</body>
</html>
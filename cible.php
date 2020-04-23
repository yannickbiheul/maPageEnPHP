<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yannick Biheul, ou l'apprentissage du développement web.</title>
    <meta name="description" content="La page d'un opérateur de production qui souhaite se reconvertir dans le développement web. Page créée pour mettre en pratique ce que j'apprends en autodidacte.">
    <!-- MON CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <!-- ANIMATE ON SCROLL -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> 
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- TOUCH ICON -->
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120-precomposed.png" /> 
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152-precomposed.png" />
</head>

<body>

    <section id="cible">
        <?php include('menu.php'); ?>

        <div class="container-cible">
        
            <div class="titre-cible">
                <h2 class="animated bounceInRight delay-0.2s">Envoyé !</h2>
            </div>

            <div class="result-cible animated bounceInLeft delay-0.2s">
            <?php
                if(isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])) {

                    $prenom = $_POST['prenom'];
                    $header="MIME-Version: 1.0\r\n";
                    $header.='From:"Yannickbiheul.fr"<yannickbiheul@gmail.com>'."\n";
                    $header.='Content-Type:text/html; charset="uft-8"'."\n";
                    $header.='Content-Transfer-Encoding: 8bit';

                    $message= 'Un message du formulaire ! <br>' .$_POST['message'] . '<br>Message envoyé par ' . $prenom . '. <br>Son e-mail : ' . $_POST['email'];

                    mail("yannickbiheul@gmail.com", "Essai Formulaire", $message, $header);
                }
            ?>
                <a href="index.php">OK</a>
            </div>
        </div>
        <?php include('footer.php'); ?>
    
    </section>


    <!-- ANIMATE ON SCOLL -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <!-- MON SCRIPT -->
    <script src="script.js"></script>

</body>
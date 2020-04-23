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

    <section id="contact">
        <?php include('menu.php'); ?>

        <div class="container-contact">
        
            <div class="titre-contact">
                <h2 class="animated bounceInRight delay-0.7s">CONTACT</h2>
            </div>

            <div class="formulaire animated bounceInLeft delay-0.8s">
                <div class="formulaire1">
                    <h3>Vous pouvez me contacter ici :<h3>
                </div>
                <div class="formulaire2">
                    <form action="cible.php" method="POST">

                        <p><label>Prénom : </label><input type="text" name="prenom"></p>
                        <p><label>Email : </label><input type="email" name="email"></p>
                        <p><label>Message : </label><textarea name="message" rows="5" cols="33"></textarea></p>
                        <p><input type="submit"></p>
                    </form>
                </div>
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
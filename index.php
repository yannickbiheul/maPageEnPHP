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

                                        <!-- HEADER -->


    <header id="header">

        <?php include("menu.php"); ?>
        <div class="header1">
            <img src="images/web5.png" alt="Web">
        </div>

        <div class="header2">
            <div class="nom">
                <div class="titre">
                    <h1 class=" text-titre animated bounceInLeft delay-1s">Yannick Biheul</h1>
                </div>
                <div class="texte">
                    <h3 class="animated zoomInUp">Reconversion professionnelle dans le développement web.</h3>
                    <div class="liens">
                        <a href="#" target="_blank">CV</a>
                        <a href="https://github.com/yannickbiheul" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="png">
                <img id="png" src="images/web5.png" data-aos="fade-left" data-aos-duration="1500" class="animated bounce delay-2s">
            </div>
        </div>

        <div class="header3">

        </div>
        
    </header>

                                        <!-- PRESENTATION -->

    

                                        <!-- PROJETS -->

    

    <?php include("footer.php"); ?>


    <!-- ANIMATE ON SCOLL -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <!-- MON SCRIPT -->
    <script src="script.js"></script>

</body>
</html>
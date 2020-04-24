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

<style>
    #projets {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(-225deg, rgba(25, 42, 86, 0.5) 30%, rgba(39, 60, 117, 0.6) 80%), url("images/mur-blanc.jpg");
    background-size: cover;
    background-position: center;
}

.projet-titre {
    border: 1px solid #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    color: var(--jaune2);
    font-family: 'Bangers', cursive;
    font-size: 2em;
    letter-spacing: 2px;
    text-shadow: -2px 2px 4px #000;
    margin-top: 40px;
}

.projet-titre h2 {
    margin-top: -40px;
}

.container-projets {
    /* border: 1px solid #fff; */
    width: 90%;
    height: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
}

.projet {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: linear-gradient(-225deg, var(--bleu4) 30%, var(--bleu3) 70%);
    width: 250px;
    height: 300px;
    padding: 10px;
    margin-top: 20px;
    border: 3px solid var(--jaune2);
    border-radius: 5px;
    box-shadow: -6px 6px 8px #000;
    color: var(--blanc);
    position: relative;
}

.punaise {
    position: absolute;
    top: -20px;
    width: 100px;
}

.projet1 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    /* padding-top: 20px; */
    height: 75%;
}

.projet1 img {
    width: 75%;
}

.projet1 a {
    text-align: center;
}

.projet2 {
    font-family: 'Bangers', cursive;
    font-size: 2em;
    letter-spacing: 2px;
    text-shadow: 2px 2px 4px #000;
    height: 15%;
    padding-bottom: 15px;
}

.projet2 a {
    text-decoration: none;
    color: #fff;
    margin-bottom: 10px;
}

.projet2 a:hover {
    color: var(--jaune2);
}
</style>

<body>


<section id="projets">
<?php include("menu.php"); ?>
        <div class="projet-titre">
            <h2>Projets</h2>
        </div>
        <div class="container-projets">
                                                                        <!-- PROJET 1 -->
            <div class="projet" data-aos="zoom-in" data-aos-duration="1500">
                <img class="punaise" src="images/punaise.png">
                <div class="projet1">
                    <a href="http://yannickbiheul.fr/jeu.html" target="_blank"><img src="images/trump2.png" alt="Trump"></a>
                </div>
                <div class="projet2">
                    <a href="http://yannickbiheul.fr/jeu.html" target="_blank"><h3>Battez le débile</h3></a>
                </div>
            </div>
                                                                        <!-- PROJET 2 -->
            <div class="projet" data-aos="zoom-in" data-aos-duration="1500">
                <img class="punaise" src="images/punaise.png">
                <div class="projet1">
                    <a href="http://yannickbiheul.fr/quiz.html" target="_blank"><img src="images/interro.png" alt="Interro"></a>
                </div>
                <div class="projet2">
                    <a href="http://yannickbiheul.fr/quiz.html" target="_blank"><h3>QuizBok</h3></a>
                </div>
            </div>
                                                                        <!-- PROJET 3 -->
            <div class="projet" data-aos="zoom-in" data-aos-duration="1500">
                <img class="punaise" src="images/punaise.png">
                <div class="projet1">
                    <a href="http://deskad.fr" target="_blank"><img src="images/journal.png" alt="Journal"></a>
                </div>
                <div class="projet2">
                    <a href="http://deskad.fr" target="_blank"><h3>Deskad</h3></a>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    <!-- ANIMATE ON SCOLL -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <!-- MON SCRIPT -->
    <script src="script.js"></script>

</body>
<?php session_start(); ?>
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
#reseaux {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(-225deg, var(--bleu4) 30%, var(--bleu3) 80%);
    overflow: hidden;
}

#contact {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    background: linear-gradient(-225deg, rgba(25, 42, 86, 0.5) 30%, rgba(39, 60, 117, 0.6) 80%), url("images/bubulles8.jpg");
    background-size: cover;
    background-position: top;
    overflow: hidden;
}

.container-contact {
    height: 80%;
    width: 80%;
    /* border: 1px solid #fff; */
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    margin-top: 10px;
    padding: 20px;
}

.titre-contact {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    /* border: 1px solid #fff; */
    height: 60px;
}

.titre-contact h2 {
    color: var(--jaune2);
    font-family: 'Bangers', cursive;
    font-size: 3em;
    letter-spacing: 2px;
}

.formulaire {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 60%;
    /* border: 1px solid #fff; */
    padding: 10px;
}

.formulaire1 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.formulaire2 {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

input {
    width: 100%;
    height: 40px;
    border-radius: 5px;
    box-shadow: 1px 1px 4px #000;
    outline: none;
    border: 1px solid #000;
    margin-bottom: 20px;
}

textarea {
    width: 250px;
    border-radius: 5px;
    box-shadow: 1px 1px 4px #000;
    outline: none;
    border: 1px solid #000;
    margin-bottom: 20px;
}

.submit {
    width: 100%;
    height: 40px;
    text-align: center;
    background-color: var(--jaune2);
    color: #000;
    border-radius: 5px;
    box-shadow: 1px 1px 4px #000;
    margin-bottom: 20px;
    cursor: pointer;
}

#reseaux {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.contact2-titre h3 {
    color: var(--jaune2);
    font-family: 'Bangers', cursive;
    font-size: 3em;
    letter-spacing: 2px;
}
.contact2-logos {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.contact2-logos img {
    width: 100px;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
}
@media screen and (max-width: 1290px) {
    .container-contact {
        padding: 0;
        margin-top: 0;
    }
    .formulaire {
        width: 250px;
    }
}
</style>

<body>

    <section id="contact">
        <?php include('menu.php'); ?>

        <div class="container-contact">

        
            <div class="titre-contact">
                <h2 class="animated bounceInRight delay-0.2s">CONTACT</h2>
            </div>

            <div class="formulaire">
                <div class="formulaire2">
                    <form action="cible.php" method="POST">
                        <p><input type="text" name="prenom" placeholder="Prénom" autofocus required></p>
                        <p><input type="email" name="email" placeholder="E-mail" required></p>
                        <p><textarea name="message" rows="5" cols="33" placeholder="Message" required></textarea></p>
                        <p><input type="submit" class="submit"></p>
                    </form>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    
    </section>

    <section id="reseaux">

        <div class="contact2-titre">
            <h3>Réseaux sociaux</h3>
        </div>
        <div class="contact2-logos">
            <div data-aos="fade-right" data-aos-duration="2000">
                <a href="https://www.facebook.com/yannickbiheul" title="Facebook" target="_blank"><img src="images/facebook.png" alt="Facebook"></a>
            </div>
            <div data-aos="fade-right" data-aos-duration="1500">
                <a href="https://twitter.com/LeBok29000" title="Twitter" target="_blank"><img src="images/twitter.png" alt="Twitter"></a>
            </div>
            <div data-aos="fade-right" data-aos-duration="1000">
                <a href="https://www.instagram.com/yannick_biheul/?hl=fr" title="Instagram" target="_blank"><img src="images/instagram.png" alt="Instagram"></a>
            </div>
            <div data-aos="fade-right" data-aos-duration="500">
                <a href="https://www.linkedin.com/in/yannick-biheul-4451a917b/" title="Linkedin" target="_blank"><img src="images/linkedin.png" alt="Linkedin"></a>
            </div>
        </div>
    
    </section>


    <!-- ANIMATE ON SCOLL -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <!-- MON SCRIPT -->
    <script src="script.js"></script>

</body>
<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>

<body>

    <header id="header">

        <?php include("menu.php"); ?>
        <div class="header1">
            <img src="images/web5.png" alt="Web">
        </div>

        <div class="header2">
            <div class="nom">
                <div class="titre">
                    <h1 class=" text-titre animated bounceInLeft delay-0.2s">Yannick Biheul</h1>
                </div>
                <div class="texte">
                    <h3 class="animated zoomInUp delay-0.4s">Reconversion professionnelle dans le développement web.</h3>
                    <div class="liens">
                        <a href="#" target="_blank">CV</a>
                        <a href="https://github.com/yannickbiheul" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="png">
                <img id="png" src="images/web5.png" data-aos="fade-left" data-aos-duration="1500" class="animated bounce delay-0.8s">
            </div>
        </div>

        <div class="header3">
            <p>Cette page a été vue <?php echo $pages_vues; ?> fois.</p>
        </div>
        
    </header>

    <section class="headerDeux">
    
        <div class="carteHeader">
            <div class="carteImage">
                <a href="presentation.php"><img src="images/presentation.png" alt="Présentation" data-aos="fade-right" data-aos-duration="1500"></a>
            </div>
            <div class="carteTexte">
                <h3>Présentation</h3>
                <p>Qui je suis, d'où je viens, comment j'apprends le développement web, etc...</p>
            </div>
        </div>
        <div class="carteHeader">
            <div class="carteImage">
                <a href="projets.php"><img src="images/joystick.png" alt="Joystick" data-aos="fade-up" data-aos-duration="1500"></a>
            </div>
            <div class="carteTexte">
                <h3>Projets</h3>
                <p>Des jeux et des applications créés avec JavaScript.</p>
            </div>
        </div>
        <div class="carteHeader">
            <div class="carteImage">
                <a href="contact.php"><img src="images/contact.png" alt="Mail" data-aos="fade-left" data-aos-duration="1500"></a>
            </div>
            <div class="carteTexte">
                <h3>Contact</h3>
                <p>Pour m'envoyer un message par formulaire ou par les réseaux sociaux.</p>
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
</html>
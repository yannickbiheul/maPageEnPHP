<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php include('head.php'); ?>


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

    <section id="jeux">

        <div class="jeux-titre">
            <h3>Jeux Vidéo</h3>
        </div>
        <div class="jeux-logos">
            <div data-aos="fade-left" data-aos-duration="2000" class="jeu">
                <img src="images/steam.png" alt="Steam">
                <h3>Steam :<br> Le Bok</h3>
            </div>
            <div data-aos="fade-left" data-aos-duration="1500" class="jeu">
                <img src="images/playstation.png" alt="Playstation">
                <h3>Playstation :<br> Le_Bok_29</h3>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" class="jeu">
                <img src="images/xbox.png" alt="Xbox">
                <h3>Xbox :<br> Le Bok 29</h3>
            </div>
        </div>
    
    </section>

    <?php include('footer.php'); ?>

</body>
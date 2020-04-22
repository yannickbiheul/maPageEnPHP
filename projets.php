<?php include("head.php"); ?>

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
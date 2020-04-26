<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>
<body>
<style>
    #presentation {
    background: linear-gradient(-225deg, rgba(25, 42, 86, 0.5) 30%, rgba(39, 60, 117, 0.6) 80%), url("images/mur-fougeres.jpg");
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}
.presentation h2 {
    font-family: 'Bangers', sans-serif;
    color: var(--jaune2);
}
.presentation img {
    width: 30%;
}
</style>
<?php include("menu.php"); ?>
    <section id="presentation">
        <h2>Chantier en cours</h2>
        <img src="images/travaux.png">


    </section>
    <?php include("footer.php"); ?>
</body>
</html>
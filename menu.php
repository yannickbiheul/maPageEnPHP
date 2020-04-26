<?php include('head.php'); ?>
<?php 
$monFichier = fopen('compteur.txt', 'r+');

$pages_vues = fgets($monFichier);
$pages_vues += 1;
fseek($monFichier, 0);
fputs($monFichier, $pages_vues);

fclose($monFichier);
?>

<!-- BOUTON -->
<div class="bouton">
    <span class="span1"></span>
    <span class="span2"></span>
    <span class="span3"></span>
</div>

<!-- NAV -->

<nav>
    <a href="index.php">Accueil</a>
    <a href="presentation.php">Présentation</a>
    <a href="projets.php">Projets</a>
    <a href="contact.php">Contact</a>
</nav>

<!-- MENU DE NAVIGATION -->

<div class="menu">
    <div class="menu1">
        <h2>Menu</h2>
    </div>
    <div class="menu2">
        <a href="index.php">Accueil</a>
        <a href="presentation.php">Présentation</a>
        <a href="projets.php">Projets</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="menu3">
        <p>Cette page a été vue <?php echo $pages_vues; ?> fois.</p>
    </div>
</div>
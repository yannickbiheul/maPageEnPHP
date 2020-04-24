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
        
    </div>
</div>

<style>
    /* BOUTON */

.bouton {
    width: 30px;
    height: 30px;
    position: fixed;
    top: 10px;
    left: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    /* border: 1px solid #fff; */
    cursor: pointer;
    z-index: 3;
}

.modifFlex {
    width: 30px;
    height: 30px;
    position: fixed;
    top: 20px;
    left: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    /* border: 1px solid #fff; */
    cursor: pointer;
    z-index: 5;
}

.span1 {
    position: absolute;
    width: 100%;
    height: 4px;
    background-color: var(--blanc);
    margin-top: -10px;
    transition-duration: 0.3s;
}

.span2 {
    position: absolute;
    width: 100%;
    height: 4px;
    background-color: var(--blanc);
    transition-duration: 0.3s;
}

.span3 {
    position: absolute;
    width: 100%;
    height: 4px;
    background-color: var(--blanc);
    margin-top: 10px;
    transition-duration: 0.3s;
}

.suppr {
    display: none;
}

.turn1 {
    transform: rotate(45deg);
    position: absolute;
    width: 100%;
    height: 4px;
    background-color: var(--blanc);
    margin-top: 0;
    transition-duration: 0.3s;
}

.turn2 {
    transform: rotate(-45deg);
    position: absolute;
    width: 100%;
    height: 4px;
    background-color: var(--blanc);
    margin-top: 0;
    transition-duration: 0.3s;
}

/* NAVIGATION */

nav {
    height: 50px;
    width: 98vw;
    position: fixed;
    top: 0;
    /* border: 1px solid #fff; */
    padding-right: 20px;
    padding-left: 20px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    box-shadow: 0 4px 4px #000;
    background: linear-gradient(-225deg, rgba(30, 39, 46, 0.8) 80%, rgba(39, 60, 117, 0.6) 80%);
    z-index: 2;
}

nav a {
    text-decoration: none;
    color: var(--blanc);
    margin-left: 10px;
    margin-right: 10px;
    text-shadow: 1px 1px 4px var(--blanc);
}

nav a:hover {
    font-weight: bold;
    text-decoration: underline;
    color: var(--jaune2);
}
/* MENU DE NAVIGATION */

.menu {
    position: fixed;
    top: 0;
    left: -300px;
    width: 250px;
    height: 100vh;
    background: linear-gradient(-225deg, var(--bleu4) 30%, var(--bleu3) 70%);
    z-index: 3;
    box-shadow: 4px 0 4px #000;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    transition-duration: 0.3s;
}

.menu-open {
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100vh;
    background: linear-gradient(-225deg, var(--bleu4) 30%, var(--bleu3) 70%);
    z-index: 3;
    box-shadow: 4px 0 4px var(--noir2);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: var(--blanc);
    transition-duration: 0.3s;
}

.menu1 {
    height: 33.3334%;
    display: none;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
}

.menu1 h2 {
    color: var(--jaune2);
    font-family: 'Bangers', cursive;
    letter-spacing: 2px;
    font-size: 2em;
}

.menu2 {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    height: 33.3334%;
}

.menu2 a {
    text-decoration: none;
    color: var(--blanc);
    letter-spacing: 3px;
    margin-bottom: 20px;
}

.menu2 a:hover {
    font-weight: bold;
    color: var(--jaune2);
}

.menu3 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    /* border: 1px solid #fff; */
    width: 95%;
    height: 33.3334%;
}

.reseaux-titre h3 {
    color: var(--jaune2);
    font-family: 'Bangers', cursive;
    letter-spacing: 2px;
    font-size: 2em;
}

.reseaux-logos img {
    width: 45px;
    margin-left: 3px;
    margin-right: 3px;
}
@media screen and (max-width: 1290px) {
    nav a {
        display: none;
    }
}
</style>
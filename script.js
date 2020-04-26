/* MENU DE NAVIGATION */

let bouton = document.querySelector(".bouton");
let menu = document.querySelector(".menu");

let span1 = document.querySelector(".span1");
let span2 = document.querySelector(".span2");
let span3 = document.querySelector(".span3");

bouton.addEventListener("click", function() {
    menu.classList.toggle("menu-open");
    span1.classList.toggle("turn1");
    span2.classList.toggle("suppr");
    span3.classList.toggle("turn2");
    bouton.classList.toggle("modifFlex");
});


/* PRESENTATION */


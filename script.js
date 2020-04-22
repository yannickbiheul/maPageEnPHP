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

let cardTitle = document.querySelector(".card-title");
let cardText = document.querySelector(".card-text");
let cardTitle2 = document.querySelector(".card-title2");
let cardText2 = document.querySelector(".card-text2");
let cardTitle3 = document.querySelector(".card-title3");
let cardText3 = document.querySelector(".card-text3");
let cardTitle4 = document.querySelector(".card-title4");
let cardText4 = document.querySelector(".card-text4");
let card = document.querySelector(".card");
let card2 = document.querySelector(".card2");
let card3 = document.querySelector(".card3");
let card4 = document.querySelector(".card4");


card.addEventListener("click", function() {
    cardTitle.classList.toggle("titleActive");
    cardText.classList.toggle("textActive");
});

card2.addEventListener("click", function() {
    cardTitle2.classList.toggle("titleActive");
    cardText2.classList.toggle("textActive");
});

card3.addEventListener("click", function() {
    cardTitle3.classList.toggle("titleActive");
    cardText3.classList.toggle("textActive");
});

card4.addEventListener("click", function() {
    cardTitle4.classList.toggle("titleActive");
    cardText4.classList.toggle("textActive");
});
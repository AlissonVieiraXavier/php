import './bootstrap';


//navbar
var botaoMenu = document.querySelector("#buttonmenu");
var menuNav = document.querySelector("#nav-list");

botaoMenu.addEventListener("click", () => {
    menuNav.classList.toggle("active");

})
///
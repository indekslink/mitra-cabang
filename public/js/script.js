const toggleMenu = document.querySelector(".hamburger-menu");
const navbar = document.querySelector("nav");
const toTop = document.querySelector(".to-top");
const listMenuNav = document.querySelectorAll("nav .nav-link");
const loader = document.getElementById("loader");

listMenuNav.forEach((menu) => {
    menu.addEventListener("click", function () {
        loader.classList.toggle("close");
    });
});

toggleMenu.addEventListener("click", function () {
    this.classList.toggle("show");
    if (window.scrollY > 50) return false; // stop execute next program
    navbar.classList.toggle("scroller", this.classList.contains("show"));
});
toTop.addEventListener("click", function () {
    window.scrollTo(0, 0);
});
window.onload = () => {
    loader.classList.toggle("close");
};

window.onscroll = () => {
    const scroll = window.scrollY;
    navbar.classList.toggle("scroller", scroll > 50);
    toTop.classList.toggle("show", scroll > 100);
};

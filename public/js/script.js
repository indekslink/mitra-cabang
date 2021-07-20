const toggleMenu = document.querySelector(".hamburger-menu");
const navbar = document.querySelector("nav");

toggleMenu.addEventListener("click", function () {
    this.classList.toggle("show");
    if (window.scrollY > 50) return false; // stop execute next program
    navbar.classList.toggle("scroller", this.classList.contains("show"));
});

window.onload = () => {
    document.getElementById("loader").classList.toggle("close");
};

window.onscroll = () => {
    const scroll = window.scrollY;
    navbar.classList.toggle("scroller", scroll > 50);
};

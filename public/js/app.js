document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            document.getElementById("mainNav").classList.add("scrolled");
            document.getElementById("mainNav").classList.add("navbar-dark");
        } else {
            document.getElementById("mainNav").classList.remove("scrolled");
            document.getElementById("mainNav").classList.remove("navbar-dark");
        }
    });
});

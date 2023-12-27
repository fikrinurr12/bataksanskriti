document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        if (window.scrollY > 70) {
            document.getElementById("mainNav").classList.add("scrolled");
            document.getElementById("mainNav").classList.add("navbar-dark");
            document
                .getElementById("mainNav")
                .classList.add("dropdown-menu-light");
        } else {
            document.getElementById("mainNav").classList.remove("scrolled");
            document.getElementById("mainNav").classList.remove("navbar-dark");
            document
                .getElementById("darkDropdown")
                .classList.remove("dropdown-menu-light");
        }
    });
});

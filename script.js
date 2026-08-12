function toggleMenu() {
    const menu = document.getElementById("navMenu");

    menu.classList.toggle("active");
}


// Tutup menu setelah link diklik
document.querySelectorAll(".nav-menu a").forEach(link => {

    link.addEventListener("click", () => {

        document.getElementById("navMenu")
            .classList.remove("active");

    });

});
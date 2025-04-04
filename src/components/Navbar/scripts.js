document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    var navbarHeight = navbar.offsetHeight;

    window.addEventListener('scroll', function() {
        if (window.scrollY >= navbarHeight) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});

function openNavbar() {
    const navbar = document.getElementById('navbar');
    const body = document.body;

    navbar.classList.add('open');
    body.classList.add('navbar-open');
}

function closeNavbar() {
    const navbar = document.getElementById('navbar');
    const body = document.body;

    navbar.classList.remove('open');
    body.classList.remove('navbar-open');
}

function toggleNavbar() {
    const navbar = document.getElementById('navbar');
    if (navbar.classList.contains('open')) {
        closeNavbar();
    } else {
        openNavbar();
    }
}

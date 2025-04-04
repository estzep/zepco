document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    var navbarHeight = navbar.offsetHeight;
    const contactBar = document.getElementById('contactBar');
    var contactBarHeight = contactBar.offsetHeight;

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

    const contactBar = document.getElementById('contactBar');
    var contactBarHeight = contactBar.offsetHeight;


    navbar.classList.add('open');

    if (window.scrollY >= contactBarHeight) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

function closeNavbar() {
    const navbar = document.getElementById('navbar');
    navbar.classList.remove('open');
}

function toggleNavbar() {
    const navbar = document.getElementById('navbar');
    navbar.classList.toggle('open');
}

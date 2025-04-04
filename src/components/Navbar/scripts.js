document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const sections = document.getElementsByTagName('section');
    const navItems = navbar.getElementsByClassName('link-item');

    function setActiveSection() {
        const scrollPosition = window.scrollY + navbar.offsetHeight;

        Array.from(sections).forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                Array.from(navItems).forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('data-target') === sectionId) {
                        item.classList.add('active');
                    }
                });
            }
        });
    }

    var navbarHeight = navbar.offsetHeight;
    window.addEventListener('scroll', function() {
        if (window.scrollY >= navbarHeight) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        setActiveSection();
    });

    setActiveSection();
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

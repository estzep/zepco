document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    console.log(navbar);
    
    window.addEventListener('scroll', function() {
        console.log(window.scrollY);
        if (window.scrollY >= 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});

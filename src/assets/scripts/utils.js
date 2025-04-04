document.addEventListener("DOMContentLoaded", function() {
    function navbarHeight() {
        var navbar = document.getElementsByTagName("nav")[0];
        var navbarHeight = navbar.offsetHeight;
        document.documentElement.style.setProperty('--navbar-height', navbarHeight + "px");
    }
    
    navbarHeight();
    
    window.addEventListener("resize", function() {
        navbarHeight();
    });
});

document.addEventListener("DOMContentLoaded", function() {
    function navbarHeight() {
        var navbar = document.getElementsByTagName("nav")[0];
        var navbarHeight = navbar.offsetHeight;
        document.documentElement.style.setProperty('--navbar-height', navbarHeight + "px");
    }

    function contactBarHeight() {
        var contactBar = document.getElementById("contactBar");
        var contactBarHeight = contactBar.offsetHeight;
        document.documentElement.style.setProperty('--contact-bar-height', contactBarHeight + "px");
    }
    
    navbarHeight();
    contactBarHeight();
    
    window.addEventListener("resize", function() {
        navbarHeight();
        contactBarHeight();
        closeNavbar();
    });
});

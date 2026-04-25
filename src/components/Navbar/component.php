<link rel="stylesheet" href="/src/components/Navbar/styles.css">

<nav id="navbar" class="navbar">
    <div class="container">
        <div class="content">
            <div class="logo">
                <a href="/">
                    <img src="/src/assets/img/zepco-logo.svg" alt="Zepeda & Torres Abogados">
                </a>
            </div>
            <div class="links">
                <ul>
                    <li class="link-item" data-target="home">
                        <a href="/#home" onclick="closeNavbar()">Inicio</a>
                    </li>
                    <li class="link-item" data-target="about">
                        <a href="/#about" onclick="closeNavbar()">Nosotros</a>
                    </li>
                    <li class="link-item" data-target="services">
                        <a href="/#services" onclick="closeNavbar()">Servicios Jurídicos</a>
                    </li>
                    <li class="link-item" data-target="team">
                        <a href="/team/" onclick="closeNavbar()">Equipo</a>
                    </li>
                    <li class="link-item" data-target="contact">
                        <a href="/#contact" onclick="closeNavbar()">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="toggler">
                <button onclick="toggleNavbar()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</nav>

<script src="/src/components/Navbar/scripts.js"></script>

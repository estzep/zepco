<link rel="stylesheet" href="/src/components/Navbar/styles.css">

<nav id="navbar" class="navbar">
    <div class="container">
        <div class="content">
            <div class="logo">
                <a href="/">
                    <img src="/src/assets/img/zepco-logo.svg" alt="Zepeda & Asociados Abogados">
                </a>
            </div>
            <div class="links">
                <ul>
                    <li class="link-item active" data-target="home">
                        <a href="/">Inicio</a>
                    </li>
                    <li class="link-item" data-target="about">
                        <a href="/">Nosotros</a>
                    </li>
                    <li class="link-item" data-target="services">
                        <a href="/">Servicios Jurídicos</a>
                    </li>
                    <li class="link-item">
                        <a href="/team">Equipo</a>
                    </li>
                    <li class="link-item" data-target="contact">
                        <a href="/">Contacto</a>
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

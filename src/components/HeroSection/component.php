<link rel="stylesheet" href="/src/components/HeroSection/styles.css">

<section id="home" class="heroSection">
    <img src="/src/assets/img/heroSection1.png" alt="Hero Section 1">
    <div class="container">
        <div class="content">
            <h1>Brindando servicios profesionales de abogacía en México</h1>
            <p class="subtitle">
                <?php
                    $years = max(50, (int) date("Y") - 1975);
                    echo "Con más de $years años de experiencia asesorando, protegiendo y representando a nuestros clientes.";
                ?>
            </p>
       
        </div>
    </div>
</section>

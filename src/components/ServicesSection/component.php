<?php
    $servicesJson = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/src/data/services.json');
    $servicesData = json_decode($servicesJson, true);
    $services = $servicesData['services'];
?>

<link rel="stylesheet" href="/src/components/ServicesSection/styles.css">

<section id="services" class="servicesSection">
    <div class="container">
        <div class="content">
            <h2>Servicios Jurídicos</h2>
            <div class="serviceCards">
                <?php foreach($services as $service): ?>
                <div id="service-<?php echo $service['name']; ?>" class="serviceCard">
                    <div class="image">
                        <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['name']; ?>">
                    </div>
                    <div class="cardContent">
                        <div class="info">
                            <h4><?php echo $service['title']; ?></h4>
                            <p><?php echo $service['description']; ?></p>
                        </div>
                        <div class="link">
                            <a href="/servicios/<?php echo $service['name']; ?>">Más información</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

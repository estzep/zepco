<!-- Nombre completo:
Dirección de correo electrónico:
Número de teléfono fijo:
Número de teléfono celular:
Tipo de servicio legal requerido:
Breve resumen:
Vía para contactarle: Email:
Teléfono celular: (Llamada - WhatsApp - Mensaje de Texto)
Teléfono Fijo: -->

<?php
// Load services data from JSON file
$servicesData = json_decode(file_get_contents(__DIR__ . '/../../data/services.json'), true);
$services = $servicesData['services'] ?? [];
?>

<link rel="stylesheet" href="/src/components/ContactSection/styles.css">

<section id="contact" class="contactSection">
    <div class="container">
        <div class="content">
            <h2>Ponte en Contacto</h2>
            <p class="description">Para contactarnos, llena el formulario y nos pondremos en contacto a la brevedad o bien llama al <a href="tel:+525552606244,0">+52 (55) 5260 6244 ext. 0</a>.</p>
            <div class="form">
                <form action="">
                    <div class="formGroup">
                        <label for="name">Nombre y apellido</label>
                        <input id="name" name="name" type="text" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="formGroup">
                        <label for="email">Correo electrónico</label>
                        <input id="email" name="email" type="email" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="formGroup formGroup2">
                        <div class="column">
                            <label for="telFijo">Teléfono fijo</label>
                            <input id="telFijo" name="telFijo" type="tel" placeholder="Ingresa tu teléfono fijo">
                        </div>
                        <div class="column">
                            <label for="telCelular">Teléfono celular</label>
                            <input id="telCelular" name="telCelular" type="tel" placeholder="Ingresa tu teléfono celular">
                        </div>
                    </div>
                    <div class="formGroup">
                        <label for="service">Tipo de servicio legal requerido</label>
                        <select id="service" name="service">
                            <option value="">Selecciona un servicio</option>
                            <?php foreach ($services as $service): ?>
                                <option value="<?php echo htmlspecialchars($service['id']); ?>">
                                    <?php echo htmlspecialchars($service['title']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="formGroup">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" placeholder="Ingresa tu mensaje" rows="4"></textarea>
                    </div>
                    <div class="formGroup">
                        <button type="submit" class="btn btnType1">Enviar</button>
                    </div>
                </form>
                <div class="map">
                    <div class="info">
                        <div class="infoItem">
                            <p>
                                <a href="https://maps.app.goo.gl/v7cAvqZ8Co9GmCnY6" target="_blank">
                                    <img src="/src/assets/icons/map-pin.svg" alt="location" class="icon">
                                    Calle Bahía de la Concepción #14 Cuarto Piso, Colonia Verónica Anzures, 11300, Ciudad de México
                                </a>
                            </p>
                        </div>
                        <div class="infoItem">
                            <p> 
                                <a href="tel:+525552606244,0"><img src="/src/assets/icons/phone.svg" alt="phone" class="icon">+52 (55) 5260 6244 ext. 0</a>
                            </p>
                            <p>
                                <a href="mailto:zepedaabogados@zepco.com.mx"><img src="/src/assets/icons/mail.svg" alt="email" class="icon">zepedaabogados@zepco.com.mx</a>
                            </p>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.503687881001!2d-99.1757880246867!3d19.433838740641214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8b482724999%3A0x1108f5ae786e277b!2sZepeda%20Abogados%20S.C.!5e0!3m2!1ses-419!2smx!4v1746557507662!5m2!1ses-419!2smx" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

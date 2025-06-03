<?php
    $valuesJson = json_encode([
        'values' => [
            [
                'id' => 'team',
                'icon' => '/src/assets/icons/team.svg',
                'alt' => 'Team',
                'title' => 'Equipo<br>Especializado',
                'description' => 'Abogados altamente capacitados lo que nos permite ofrecer soluciones jurídicas integrales, precisas y estratégicas.'
            ],
            [
                'id' => 'experience',
                'icon' => '/src/assets/icons/experience.svg',
                'alt' => 'Experience',
                'title' => 'Experiencia y<br>Trayectoria',
                'description' => 'Con casi 50 años de práctica jurídica, hemos acompañado a empresas, inversionistas y particulares en sus operaciones.'
            ],
            [
                'id' => 'commitment',
                'icon' => '/src/assets/icons/commitment.svg',
                'alt' => 'Commitment',
                'title' => 'Compromiso y <br>Responsabilidad',
                'description' => 'Atendemos cada caso con atención personalizada. Nos involucramos a fondo, y proponemos soluciones profesionales.'
            ]
        ]
    ]);
    $values = json_decode($valuesJson, true)['values'];
?>

<link rel="stylesheet" href="/src/components/ValuesSection/styles.css">

<section id="values" class="valuesSection">
    <div class="container">
        <div class="content">
            <h2>
                Brindandote
                <br>
                Excelencia Jurídica
            </h2>
            <p class="subtitle">
                Brindamos claridad, seguridad y compromiso en cada asunto legal. Nuestra experiencia y enfoque especializado nos convierten en un aliado confiable para empresas, inversionistas y particulares.
            </p>
            <div class="values">
                <?php foreach($values as $value): ?>
                <div class="value <?php echo $value['id']; ?>">
                    <div class="icon">
                        <img src="<?php echo $value['icon']; ?>" alt="<?php echo $value['alt']; ?>">
                    </div>
                    <h4 class="title"><?php echo $value['title']; ?></h4>
                    <p class="description"><?php echo $value['description']; ?></p>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

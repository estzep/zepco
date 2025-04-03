<?php define('ROOT_PATH', dirname(__DIR__) . '/'); ?>

<link rel="stylesheet" href="/src/pages/Team/styles.css">

<section id="team" class="team">
    <div class="container">
        <div class="content">
            Team
            <?php echo $path; ?>
            <br>
            <?php echo ROOT_PATH; ?>
        </div>
    </div>
</section> 
<?php include("src/components/ContactSection/component.php");?>

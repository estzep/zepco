<?php
$team = json_decode(file_get_contents(__DIR__ . '/../../data/team.json'), true);
$team = $team['team'] ?? [];
?>

<link rel="stylesheet" href="/src/pages/Team/styles.css">

<?php include("src/components/TeamHeroSection/component.php");?>
<section id="team" class="team">
    <div class="container">
        <div class="content">
            <h4>Socios</h4>
            <div class="teamMembers">
                <?php foreach ($team as $member): ?>
                <div class="teamMember">
                    <div class="image">
                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                    </div>
                    <div class="info">
                        <h5><?php echo $member['name']; ?></h5>
                        <p class="position"><?php echo $member['position']; ?></p>
                        <p class="description"><?php echo $member['description']; ?></p>
                        <!-- <a href="/team/<?php echo $member['username']; ?>">Más información</a> -->
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php include("src/components/ContactSection/component.php");?>

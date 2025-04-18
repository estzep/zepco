<?php include("src/components/ContactBar/component.php");?>
<?php include("src/components/Navbar/component.php");?>
<main>
    <?php
        $page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        switch ($page) {
            case '/':
                include('src/pages/Home/page.php');
                break;
            case '/team/':
                include('src/pages/Team/page.php');
                break;
            default:
                http_response_code(404);
                include('src/pages/Error/page.php');
                break;
        }
    ?>
</main>
<?php include("src/components/Footer/component.php");?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/src/assets/scripts/utils.js"></script>

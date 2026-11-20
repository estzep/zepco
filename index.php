<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (!in_array($path, ['/', '/team/'])) {
    http_response_code(404);
}
?>
<!DOCTYPE html>
<html lang="es">
    <?php require("src/components/Head/component.php");?>
    <body>
        <?php require("app.php");?>
    </body>
</html>

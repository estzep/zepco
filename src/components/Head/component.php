<?php
$metadataJson = file_get_contents(__DIR__ . '/../../data/metadata.json');
$metadataData = json_decode($metadataJson, true);
$metadata = $metadataData['metadata'];

$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$title = $metadata[$page]['title'] ?? 'Zepeda & Torres Abogados';
$description = $metadata[$page]['description'] ?? '';
$robots = $metadata[$page]['robots'] ?? 'noindex, nofollow';
?>

<head>
    <!-- General -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="<?php echo $robots; ?>">
    <meta name="author" content="Qarta Online">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="canonical" href="https://zepco.mx<?php echo $page; ?>">
    <meta name="url" content="https://zepco.mx<?php echo $page; ?>">
    
    <!-- Favicon and icons -->
    <link rel="icon" href="/favicon.ico">

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/assets/styles/fonts.css">
    <link rel="stylesheet" href="/src/assets/styles/buttons.css">
    <link rel="stylesheet" href="/src/assets/styles/globals.css">
</head>

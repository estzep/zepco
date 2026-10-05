<?php
$metadataJson = file_get_contents(__DIR__ . '/../../data/metadata.json');
$metadataData = json_decode($metadataJson, true);
$metadata = $metadataData['metadata'];
$site = $metadataData['site'];

$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$title = $metadata[$page]['title'] ?? 'Zepeda & Torres Abogados';
$description = $metadata[$page]['description'] ?? '';
$robots = $metadata[$page]['robots'] ?? 'noindex, nofollow';

$canonicalUrl = 'https://zepco.mx' . $page;
$ogImageUrl = $site['url'] . $site['ogImage'];
$logoUrl = $site['url'] . $site['logo'];
$isIndexable = stripos($robots, 'noindex') === false;

$structuredData = null;
if ($isIndexable) {
    $homeDescription = $metadata['/']['description'];
    $structuredData = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Organization',
                '@id' => $site['url'] . '/#organization',
                'name' => $site['name'],
                'legalName' => $site['legalName'],
                'url' => $site['url'] . '/',
                'logo' => $logoUrl,
                'email' => $site['email'],
                'telephone' => $site['telephone'],
                'address' => array_merge(['@type' => 'PostalAddress'], $site['address']),
            ],
            [
                '@type' => 'LegalService',
                '@id' => $site['url'] . '/#legalservice',
                'name' => $site['name'],
                'url' => $site['url'] . '/',
                'image' => $logoUrl,
                'description' => $homeDescription,
                'email' => $site['email'],
                'telephone' => $site['telephone'],
                'address' => array_merge(['@type' => 'PostalAddress'], $site['address']),
                'parentOrganization' => ['@id' => $site['url'] . '/#organization'],
            ],
        ],
    ];
}
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
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>">
    <meta name="url" content="<?php echo $canonicalUrl; ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo $ogImageUrl; ?>">
    <meta property="og:locale" content="<?php echo $site['locale']; ?>">
    <meta property="og:site_name" content="<?php echo $site['name']; ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $ogImageUrl; ?>">

    <?php if ($structuredData !== null): ?>
    <script type="application/ld+json"><?php echo json_encode($structuredData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
    <?php endif; ?>
    
    <!-- Favicon and icons -->
    <link rel="icon" href="/favicon.ico">

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/assets/styles/fonts.css">
    <link rel="stylesheet" href="/src/assets/styles/buttons.css">
    <link rel="stylesheet" href="/src/assets/styles/globals.css">
</head>

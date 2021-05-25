<?php

$page = get_page_content();
$meta = $page->getMeta();
$services = $page->getServices();
$cta = $page->getCta();
$contacts = $page->getContacts();
$menu = $page->getMenu();

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $meta->getTitle(); ?></title>
    <meta name="description" content="<?php echo $meta->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $meta->getKeywords(); ?>">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?>
    <main>
        <?php include_once 'services.php'; ?>
        <?php include 'cta.php'; ?>
        <?php foreach ($services as $service): ?>
            <?php include 'service-section.php'; ?>
        <?php endforeach; ?>
        <?php include 'cta.php'; ?>
        <?php include_once 'contacts.php'; ?>
    </main>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP Dev Theme</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <nav class="main-nav nav-bar">
        <?php
        // Hauptmenü anzeigen
        wp_nav_menu([
            'theme_location' => 'main',
            'container' => 'ul',
            'menu_class' => 'container',
        ]);
        ?>
    </nav>
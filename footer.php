<footer>

<div class="container">


    <nav class="footer-nav nav-bar">
        <?php
        // Secondary Menu anzeigen
        wp_nav_menu([
            'theme_location' => 'secondary',
            'container' => 'ul',
            'menu_class' => 'footer-menu',
        ]);
        ?>
    </nav>

    <p>
        &copy; 2024 - <?php echo date('Y'); ?> Enno Hyttrek
    </p>

    <p>
        Theme Version: <?php echo wp_get_theme()->get('Version'); ?>
    </p>

</div>

</footer>
<?php wp_footer(); ?>
</body>

</html>
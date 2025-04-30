<footer>
    <p>
        &copy; 2024 - <?php echo date('Y'); ?> Enno Hyttrek
    </p>


    <nav>
        <?php
        // Secondary Menu anzeigen
        wp_nav_menu([
            'theme_location' => 'secondary',
            'container' => 'ul',
            'menu_class' => 'footer-menu',
        ]);
        ?>
    </nav>

</footer>
<?php wp_footer(); ?>
</body>

</html>
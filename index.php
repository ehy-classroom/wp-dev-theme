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
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <main>

    <!-- Der WP Loop -->
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>

                <h2><?php the_title(); ?></h2>

                <?php
                the_content();
            endwhile;
        else:
            ?>
            <p><?php _e('Sorry, no content available.', 'theme-dev-classic'); ?></p>
            <?php
        endif;
        ?>

    </main>

    <footer>
        <p>
            &copy; 2024 - <?php echo date('Y'); ?> Enno Hyttrek
        </p>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>
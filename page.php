<?php get_header(); ?>

<header>
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
</header>

<main>
    <div class="container">
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
    </div>
</main>

<p class="dev-info">
    Dies ist das Template page.php
</p>

<?php get_footer(); ?>
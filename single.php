<?php get_header(); ?>

<header>
    <p><?php bloginfo('name'); ?></p>
    <p><?php bloginfo('description'); ?></p>
    <h1><?php the_title(); ?></h1>
</header>

<main>

    <!-- Der WP Loop -->
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>



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

<p class="dev-info">
    Dies ist das Template single.php
</p>

<?php get_footer(); ?>
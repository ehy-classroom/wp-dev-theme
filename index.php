<?php get_header(); ?>

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

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

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
    Dies ist das Template index.php
</p>

<?php get_footer(); ?>
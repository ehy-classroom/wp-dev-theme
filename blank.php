<?php
/*
Template Name: Blank
*/
?>

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




    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
    else:
        ?>
        <p><?php _e('Sorry, no content available.', 'theme-dev-classic'); ?></p>
        <?php
    endif;
    ?>


<?php wp_footer(); ?>
</body>

</html>
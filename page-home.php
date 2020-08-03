<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 */

get_header();
?>

<div id="primary">
    <main id="main">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="banner">
                </div>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/public/images/blog-1.webp" type="image/webp">
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/public/images/blog-1.png" type="image/png">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/public/images/blog-1.png" alt="">
                </picture>
                <a href="#" class="btn-one">Button 1</a>
                <a href="#" class="btn-two">Button 2</a>
        <?php endwhile;
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->
<div class="card__produtos">
    <div class="card__produtos__title active">
        
    </div>
    <div class="card__produtos__image">
        
    </div>
</div>

<?php
get_footer();

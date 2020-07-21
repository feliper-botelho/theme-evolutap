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
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <div class="banner">
                </div>
                <a href="#" class="btn-one">Button 1</a>
                <a href="#" class="btn-two">Button 2</a>
            <?php endwhile;
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
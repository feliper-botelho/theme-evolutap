<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evolutap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'valente'); ?></a>
        <header id="masthead" class="py-3 site-header navbar-static-top" role="banner">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="navbar-brand">
                        <a href="<?= get_home_url() ?>">
                            <img class="img-fluid" src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </a>
                    </div>

                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'main-nav',
                        'container_class' => 'collapse navbar-collapse justify-content-center d-none d-lg-flex',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>

                    <!-- <div id="menu-mobile" class="mobile-menu">
                    <?php
                    // wp_nav_menu(array(
                    // 'theme_location'    => 'primary',
                    // 'container'       => 'div',
                    // 'container_id'    => 'main-nav-mobile',
                    // 'container_class' => 'd-flex flex-column',
                    // 'menu_id'         => false,
                    // 'menu_class'      => 'navbar-nav',
                    // 'depth'           => 3,
                    // 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    // 'walker'          => new wp_bootstrap_navwalker()
                    // ));
                    ?>
                </div> -->

                    <div class="d-flex align-items-center justify-content-center">
                        <button id="hamburguer-mobile" class="hamburger hamburger--collapse ml-4" aria-label="toggler menu" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </nav>

            </div>
        </header><!-- #masthead -->


        <div>
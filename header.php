<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package angel_pet
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'angel_pet'); ?></a>
        <div class="header-contact">
            <p><span class="header-contact-text">まずはご相談ください</span><span class="header-contact-tel"><a
                        href="tel:0120-011-200"><i class="fa-solid fa-phone"></i>0120-011-200</a><br>
                    （電話受付 9:00 - 17:00）</span></p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="contact-button">ペット火葬のご予約はこちら<br><span>Contact・Reserve</span></a>
        </div>
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/angel-logo-h.svg"
                        class="custom-logo desktop-logo" alt="<?php bloginfo('name'); ?>">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/angel-logo-w.svg"
                        class="custom-logo mobile-logo default-logo" alt="<?php bloginfo('name'); ?>">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/angel-logo-mark.svg"
                        class="custom-logo mobile-logo scrolled-logo" alt="<?php bloginfo('name'); ?>">
                </a>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span class="menu-text">MENU</span>
                </button>
                <div class="menu-container">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'menu_class'     => 'menu',
                        )
                    );
                    ?>
                </div>
            </nav><!-- #site-navigation -->


        </header><!-- #masthead -->
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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'angel_pet' ); ?></a>
        <div class="header-contact">
            <p>まずはご相談ください<a href="tel:0120-011-200">0120-011-200</a></p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="contact-button">お問い合わせ・ご予約はこちら</a>
        </div>
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                if ($custom_logo_id) {
                    $logo_desktop = get_template_directory_uri() . '/images/angel-logo-h.svg';
                    $logo_mobile = get_template_directory_uri() . '/images/angel-logo-w.svg';
                    ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
                    <img src="<?php echo esc_url($logo_desktop); ?>" class="custom-logo desktop-logo"
                        alt="<?php bloginfo('name'); ?>">
                    <img src="<?php echo esc_url($logo_mobile); ?>" class="custom-logo mobile-logo"
                        alt="<?php bloginfo('name'); ?>">
                </a>
                <?php
                }
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="menu-text">MENU</span>
                    <span></span>
                    <span></span>
                    <span></span>
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
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package angel_pet
 */

get_header();
?>

<div class="mv-slider">
    <div class="swiper mv-slider01">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mv-slider01.jpg" alt="スライダー1">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mv-slider02.jpg" alt="スライダー2">
                </div>
            </div>
        </div>
    </div>
    <div class="swiper mv-slider02">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mv-slider01.jpg" alt="スライダー3">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mv-slider02.jpg" alt="スライダー4">
                </div>
            </div>
        </div>
    </div>
</div>

<main id="primary" class="site-main">

    <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
    <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>
    <?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
    <!-- お試し -->
    <!-- お試し -->
    <!-- お試し -->
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
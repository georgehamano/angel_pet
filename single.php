<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package angel_pet
 */

get_header();
?>

<div class="content-area">
    <main id="single" class="site-main">

        <?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'single');

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__('前の記事:', 'angel_pet') . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__('次の記事:', 'angel_pet') . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

    </main><!-- #main -->

    <aside class="widget-area">
        <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
        <?php endif; ?>
    </aside>
</div>

<?php
get_footer();
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package angel_pet
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
    <header class="page-header">
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header><!-- .page-header -->

    <?php if (has_post_thumbnail()) : ?>
    <div class="page-thumbnail">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'angel_pet' ),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
        <?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'angel_pet' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
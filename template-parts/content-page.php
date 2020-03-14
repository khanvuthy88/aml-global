<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AMG_Global
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if(is_page('scope-of-supply')): ?>
			<?php if ( is_active_sidebar( 'sidebar-scope_of_supply' ) ) : ?>
			    <ul id="scope-of-supply">
			        <?php dynamic_sidebar( 'sidebar-scope_of_supply' ); ?>
			    </ul>
			<?php endif; ?>
		<?php endif; ?>
		<?php if(is_page('principals-and-partners')): ?>
			<?php if ( is_active_sidebar( 'sidebar-global-partners' ) ) : ?>
			    <ul id="sidebar-global-partners">
			        <?php dynamic_sidebar( 'sidebar-global-partners' ); ?>
			    </ul>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aml-global' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'aml-global' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

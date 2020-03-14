<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AMG_Global
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!-- <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="show_background_image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover;background-position: center;"></div> -->
			<div class="custom_feature_image_style">
				<?php aml_global_post_thumbnail(); ?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

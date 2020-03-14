<?php
/**
 * Template Name: Home Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage aml-global
 * @since 1.0
 */

get_header();
?>
	
	<section id="home-page">
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="show_background_image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover;background-position: center;">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="content">
									<h1>Bridging the Link of Global Business Partners</h1>
									<h3>Your Reliable &amp; Trusted Global Business Partner</h3>
									<ul>
										<li>Indonesia</li>
										<li>Cambodia</li>
										<li>Vietnam</li>
										<li>Laos</li>
										<li>Myanmar</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		
	</section>

<?php 
	get_footer();
?>
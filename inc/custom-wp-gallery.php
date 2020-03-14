<?php 
	/**
	 * 
	 */
	class WP_Gallery_VT extends WP_Widget_Media_Gallery
	{
		public function __construct() {
			parent::__construct();
		}
		
		public function render_control_template_scripts()
		{
			parent::render_control_template_scripts();
			?>
			<script type="text/html" id="tmpl-wp-media-widget-gallery-preview">
				<#
				var ids = _.filter( data.ids, function( id ) {
					return ( id in data.attachments );
				} );
				#>
				<# if ( ids.length ) { #>
					<ul class="gallery media-widget-gallery-preview vt" role="list">
						<# _.each( ids, function( id, index ) { #>
							<# var attachment = data.attachments[ id ]; #>
							<# if ( index < 6 ) { #>
								<li class="gallery-item">
									<div class="gallery-icon">
										<img alt="{{ attachment.alt }}"
											<# if ( index === 5 && data.ids.length > 6 ) { #> aria-hidden="true" <# } #>
											<# if ( attachment.sizes.thumbnail ) { #>
												src="{{ attachment.sizes.thumbnail.url }}" width="{{ attachment.sizes.thumbnail.width }}" height="{{ attachment.sizes.thumbnail.height }}"
											<# } else { #>
												src="{{ attachment.url }}"
											<# } #>
											<# if ( ! attachment.alt && attachment.filename ) { #>
												aria-label="
												<?php
												echo esc_attr(
													sprintf(
														/* translators: %s: The image file name. */
														__( 'The current image has no alternative text. The file name is: %s' ),
														'{{ attachment.filename }}'
													)
												);
												?>
												"
											<# } #>
										/>
										<# if ( index === 5 && data.ids.length > 6 ) { #>
										<div class="gallery-icon-placeholder">
											<p class="gallery-icon-placeholder-text" aria-label="
											<?php
												printf(
													/* translators: %s: The amount of additional, not visible images in the gallery widget preview. */
													__( 'Additional images added to this gallery: %s' ),
													'{{ data.ids.length - 5 }}'
												);
											?>
											">+{{ data.ids.length - 5 }}</p>
										</div>
										<# } #>
									</div>
								</li>
							<# } #>
						<# } ); #>
					</ul>
				<# } else { #>
					<div class="attachment-media-view">
						<button type="button" class="placeholder button-add-media"><?php echo esc_html( $this->l10n['add_media'] ); ?></button>
					</div>
				<# } #>
			</script>
			<?php
		}
	}
 ?>
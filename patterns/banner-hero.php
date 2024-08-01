<?php

/**
 * Title: Hero
 * Slug: wcrh-base-theme/banner-hero
 * Categories: wcrh
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section"},"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"default"},"width":"page-width-full"} -->
<section class="wp-block-group is-style-default has-base-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Inner"},"layout":{"type":"default"},"width":"page-width-normal"} -->
	<div class="wp-block-group"><!-- wp:wcrh/custom-spacer /-->

		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"className":"is-style-flex-center","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
			<div class="wp-block-column is-style-flex-center"><!-- wp:group {"metadata":{"name":"Inner"},"layout":{"type":"default"}} -->
				<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
					<h1 class="wp-block-heading has-xx-large-font-size">Best way to test design ideas is wireframing.</h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p> Nulla id feugiat velit, eget consectetur quam. Pellentesque cursus pulvinar augue, at viverra libero congue eget. Vivamus quis tellus quam. Sed elementum tristique diam, in euismod ligula laoreet in.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get Started for Free</a></div>
						<!-- /wp:button -->

						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Contact Sales</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:wcrh/custom-spacer /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/robert-tudor-G7bXcUgh_xk-unsplash.jpg" alt="<?php esc_attr_e('Building exterior in Toronto, Canada'); ?>" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php

/**
 * Title: Hero
 * Slug: wcrh-base-theme/main-hero
 * Categories: wcrh
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section","categories":["wcrh"],"patternName":"wcrh-base-theme/banner-hero"},"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"gradient":"base-to-base-two","layout":{"type":"default"},"width":"page-width-full"} -->
<section class="wp-block-group is-style-default has-base-to-base-two-gradient-background has-background" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Inner"},"layout":{"type":"default"},"width":"page-width-full"} -->
	<div class="wp-block-group"><!-- wp:wcrh/custom-spacer {"height":"spacer-x4"} /-->

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"width":"page-width-extra"} -->
		<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"},"width":"page-width-text"} -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
				<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size">Unbelievable Wireframe Design</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Nulla id feugiat velit, eget consectetur quam. Pellentesque cursus pulvinar augue, at viverra libero congue eget. </p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:wcrh/custom-spacer /-->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/robert-tudor-G7bXcUgh_xk-unsplash.jpg" alt=" " /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
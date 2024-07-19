<?php

/**
 * Title: Featured
 * Slug: wcrh-base-theme/special-feature
 * Categories: wcrh
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section"},"backgroundColor":"base","layout":{"type":"default"}} -->
<section class="wp-block-group has-base-background-color has-background"><!-- wp:group {"metadata":{"name":"Inner"}, "layout":{"type":"default"},"width":"page-width-extra"} -->
	<div class="wp-block-group"><!-- wp:wcrh/custom-spacer {"height":"spacer-x4"} /-->

		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"33.33%","className":"is-style-flex-center"} -->
			<div class="wp-block-column is-style-flex-center" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"},"width":"page-width-text"} -->
				<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
					<h3 class="wp-block-heading has-x-large-font-size">Special Feature</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Quisque tempor consequat sodales. Phasellus sagittis est dui, dictum pharetra felis ullamcorper vel. Duis lectus felis, facilisis eleifend nibh et, hendrerit ultrices lectus.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Maecenas lectus tellus, ullamcorper in porttitor eget, mattis nec quam. Curabitur consectetur ligula in dolor semper, sed facilisis augue hendrerit. Quisque hendrerit leo massa, ac efficitur velit interdum dictum. </p>
					<!-- /wp:paragraph -->

					<!-- wp:wcrh/custom-spacer /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/abstract-geometric-art.webp" alt=" " /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:wcrh/custom-spacer {"height":"spacer-x4"} /-->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php

/**
 * Title: Blog
 * Slug: wcrh-base-theme/blog-archive
 * Categories: wcrh
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section"},"layout":{"type":"default"}} -->
<section class="wp-block-group"><!-- wp:group {"metadata":{"name":"Inner"},"layout":{"type":"default"},"width":"page-width-normal"} -->
	<div class="wp-block-group"><!-- wp:wcrh/custom-spacer {"height":"spacer-x2"} /-->

		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading -->
				<h2 class="wp-block-heading">Blog Archive</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec massa augue, euismod eu purus ut, viverra aliquet odio.</p>
				<!-- /wp:paragraph -->

				<!-- wp:wcrh/custom-spacer {"height":"spacer-x1"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">

				<!-- wp:wcrh/custom-archive {"numPosts":"4"} /-->

			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:wcrh/custom-spacer {"height":"spacer-x4"} /-->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
/**
 * Title: About
 * Slug: bizenta/about
 * Categories: bizenta
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

?>

<!-- wp:group {"className":"is-style-bizenta-y70-a2","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bizenta-y70-a2">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"className":"is-style-bizenta-yy30-fxl"} -->
			<h2 class="wp-block-heading is-style-bizenta-yy30-fxl"><?php esc_html_e( 'About Us', 'bizenta' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"is-style-bizenta-yy30"} -->
			<p class="is-style-bizenta-yy30"><?php esc_html_e( 'Our comprehensive cybersecurity solutions ensure your business is protected from evolving threats. Trust our expertise to secure your digital assets', 'bizenta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:pattern {"slug":"bizenta/about-item"} /-->
			<!-- wp:pattern {"slug":"bizenta/about-item"} /-->
			<!-- wp:pattern {"slug":"bizenta/about-item"} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%","className":"is-style-bizenta-about-image"} -->
		<div class="wp-block-column is-style-bizenta-about-image" style="flex-basis:60%">

			<!-- wp:image {"id":2062,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
			<figure class="wp-block-image alignright size-full">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/about-1.webp' ) ); ?>" alt="" class="wp-image-2062"/>
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

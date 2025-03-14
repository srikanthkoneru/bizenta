<?php
/**
 * Title: Sidebar
 * Slug: bizenta/sidebar
 * Categories: bizenta
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

?>

<!-- wp:group {"className":"is-style-bizenta-sidebar-widget","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bizenta-sidebar-widget">

	<!-- wp:heading {"className":"is-style-bizenta-service-heading"} -->
	<h2 class="wp-block-heading is-style-bizenta-service-heading"><?php esc_html_e( 'Search', 'bizenta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-bizenta-sidebar-widget","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bizenta-sidebar-widget">

	<!-- wp:heading {"className":"is-style-bizenta-service-heading"} -->
	<h2 class="wp-block-heading is-style-bizenta-service-heading"><?php esc_html_e( 'Recent Posts', 'bizenta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:latest-posts {"className":"is-style-bizenta","excerptLength":34,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-bizenta-sidebar-widget","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bizenta-sidebar-widget">

	<!-- wp:heading {"className":"is-style-bizenta-service-heading"} -->
	<h2 class="wp-block-heading is-style-bizenta-service-heading"><?php esc_html_e( 'Categories', 'bizenta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:categories {"showHierarchy":true, "className":"is-style-bizenta"} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-bizenta-sidebar-widget","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bizenta-sidebar-widget">

	<!-- wp:heading {"className":"is-style-bizenta-service-heading"} -->
	<h2 class="wp-block-heading is-style-bizenta-service-heading"><?php esc_html_e( 'Tag Cloud', 'bizenta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:tag-cloud {"className":"is-style-bizenta"} /-->

</div>
<!-- /wp:group -->


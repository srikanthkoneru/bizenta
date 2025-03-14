<?php
/**
 * Title: Header One Light
 * Slug: bizenta/header-one-light
 * Categories: bizenta
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

?>

<!-- wp:group {"className":"is-style-bizenta-header-one-light"} -->
<div class="wp-block-group is-style-bizenta-header-one-light">

	<!-- wp:group {"className":"bizenta-header-one-light-top","layout":{"type":"constrained"}} -->
	<div class="wp-block-group bizenta-header-one-light-top">
		<!-- wp:paragraph {"className":"bizenta-header-one-light-top-phone"} -->
		<p class="bizenta-header-one-light-top-phone"><?php esc_html_e( '(123) 456 789', 'bizenta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"bizenta-header-one-light-main","layout":{"type":"constrained"}} -->
	<div class="wp-block-group bizenta-header-one-light-main">

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide">

			<!-- wp:column {"width":"20%","className":"bizenta-header-one-light-logo"} -->
			<div class="wp-block-column bizenta-header-one-light-logo" style="flex-basis:20%">
				<!-- wp:site-logo {"width":200,"shouldSyncIcon":true} /-->
				<!-- wp:paragraph {"className":"bizenta-header-one-light-icon"} -->
				<p class="bizenta-header-one-light-icon"></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"60%","className":"bizenta-header-one-light-nav"} -->
			<div class="wp-block-column bizenta-header-one-light-nav" style="flex-basis:60%">
				<!-- wp:navigation {"ref":4,"overlayMenu":"never","align":"wide","className":"is-style-bizenta-menu","layout":{"type":"flex","justifyContent":"right"}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%","className":"bizenta-header-one-light-cta"} -->
			<div class="wp-block-column bizenta-header-one-light-cta" style="flex-basis:20%">
				<!-- wp:pattern {"slug":"bizenta/header-phone-one"} /-->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"bizenta-header-one-light-meta","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull bizenta-header-one-light-meta">

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">

			<!-- wp:column {"width":"66.66%","className":"bizenta-header-one-light-contact"} -->
			<div class="wp-block-column bizenta-header-one-light-contact" style="flex-basis:66.66%">

				<!-- wp:paragraph -->
				<p>
					<strong>Address:</strong>34 Gillon Rd, Grenada, Mississippi(MS), 38901
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>
					<strong>Email:</strong>hello@bizenta.com
				</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">

				<!-- wp:social-links {"align":"right","className":"is-style-logos-only bizenta-header-one-light-social"} -->
				<ul class="wp-block-social-links alignright is-style-logos-only bizenta-header-one-light-social">

					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
					<!-- wp:social-link {"url":"#","service":"facebook"} /-->
					<!-- wp:social-link {"url":"#","service":"x"} /-->
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

				</ul>
				<!-- /wp:social-links -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

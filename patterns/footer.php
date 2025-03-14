<?php
/**
 * Title: Footer
 * Slug: bizenta/footer
 * Categories: bizenta
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"accent-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">

			<!-- wp:site-logo {"width":139} /-->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"textColor":"base-2"} -->
			<p class="has-base-2-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<?php esc_html_e( 'Turpis pharetra congue faucibus sagittis vestibulum habitasse volutpat.', 'bizenta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"className":"is-style-logos-only is-style-bizenta-footer-social"} -->
			<ul class="wp-block-social-links is-style-bizenta-footer-social">

				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"youtube"} /-->
			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"className":"is-style-bizenta-footer-menu-heading"} -->
					<h2 class="wp-block-heading is-style-bizenta-footer-menu-heading"><?php esc_html_e( 'Pages', 'bizenta' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:list {"className":"is-style-bizenta-footer-menu"} -->
					<ul class="wp-block-list is-style-bizenta-footer-menu">

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://123.com" data-type="link" data-id="https://123.com"><?php esc_html_e( 'Home', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'About Us', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Integrations', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Pricing', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Contact Us', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

					</ul>
					<!-- /wp:list -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"className":"is-style-bizenta-footer-menu-heading"} -->
					<h2 class="wp-block-heading is-style-bizenta-footer-menu-heading"><?php esc_html_e( 'Company', 'bizenta' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:list {"className":"is-style-bizenta-footer-menu"} -->
					<ul class="wp-block-list is-style-bizenta-footer-menu">

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://123.com" data-type="link" data-id="https://123.com"><?php esc_html_e( 'Home', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'About Us', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Integrations', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Pricing', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Contact Us', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

					</ul>
					<!-- /wp:list -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"className":"is-style-bizenta-footer-menu-heading"} -->
					<h2 class="wp-block-heading is-style-bizenta-footer-menu-heading"><?php esc_html_e( 'Information', 'bizenta' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:list {"className":"is-style-bizenta-footer-menu"} -->
					<ul class="wp-block-list is-style-bizenta-footer-menu">

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://123.com" data-type="link" data-id="https://123.com"><?php esc_html_e( 'Home', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'About Us', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Integrations', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Pricing', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item {"className":"is-style-bizenta-footer-menu-item"} -->
						<li class="is-style-bizenta-footer-menu-item">
							<a href="https://234.com" data-type="link" data-id="https://234.com"><?php esc_html_e( 'Contact Us', 'bizenta' ); ?></a>
						</li>
						<!-- /wp:list-item -->

					</ul>
					<!-- /wp:list -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-bizenta-y10a4","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bizenta-y10a4">

	<!-- wp:paragraph {"className":"is-style-bizenta-b2center-small"} -->
	<p class="is-style-bizenta-b2center-small">
		<?php printf( '%1$s %2$s %3$s. %4$s', esc_html__( 'Copyright', 'bizenta' ), esc_html( gmdate( 'Y' ) ), esc_html__( 'Bizenta', 'bizenta' ), esc_html__( 'All rights reserved', 'bizenta' ) ); ?> 
	</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

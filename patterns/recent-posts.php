<?php
/**
 * Title: Recent Posts
 * Slug: bizenta/recent-posts
 * Categories: bizenta
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

?>

<!-- wp:group {"className":"is-style-bizenta-y80","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bizenta-y80">

	<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"align":"wide"} -->
	<div class="wp-block-query alignwide">

		<!-- wp:post-template {"className":"is-style-bizenta","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"className":"is-style-default is-style-bizenta-p30","layout":{"inherit":false}} -->
		<div class="wp-block-group is-style-default is-style-bizenta-p30">

			<!-- wp:post-featured-image /-->
			<!-- wp:post-title {"isLink":true,"className":"is-style-bizenta-recent-post"} /-->
			<!-- wp:post-date /-->
			<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":26,"className":"is-style-bizenta-recent-post-excerpt"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->


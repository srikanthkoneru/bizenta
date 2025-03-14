<?php
/**
 * Register post block styles.
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

register_block_style(
	'core/post-title',
	array(
		'name'         => 'bizenta-recent-post',
		'label'        => __( 'B RP1', 'bizenta' ),
		'inline_style' => '.wp-block-post-title.is-style-bizenta-recent-post{margin-block-start:1.4rem;margin-block-end:1.4rem;}',
	)
);
register_block_style(
	'core/post-title',
	array(
		'name'         => 'zypento-page-heading',
		'label'        => __( 'B PT', 'bizenta' ),
		'inline_style' => '.wp-block-post-title.is-style-zypento-page-heading{margin-block-start:0;font-size:var(--wp--preset--font-size--xxx-large);}@media screen and (min-width : 1201px) {.wp-block-post-title.is-style-zypento-page-heading{padding-right:30%;}}',
	)
);
register_block_style(
	'core/post-excerpt',
	array(
		'name'         => 'bizenta-recent-post-excerpt',
		'label'        => __( 'B RP1', 'bizenta' ),
		'inline_style' => ".wp-block-post-excerpt.is-style-bizenta-recent-post-excerpt a{text-decoration:none;transition:padding 500ms ease;position:reletive;padding-top: var(--wp--preset--spacing--5);padding-bottom: var(--wp--preset--spacing--5);padding-right:2em;padding-left:0;border-bottom:2px dotted var(--wp--preset--color--contrast);background:none;color:var(--wp--preset--color--contrast);border-radius:0;font-weight:800;background:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 16 16'%3E%3Cpath fill='%23000' fill-rule='evenodd' d='M10.159 10.72a.75.75 0 1 0 1.06 1.06l3.25-3.25L15 8l-.53-.53l-3.25-3.25a.75.75 0 0 0-1.061 1.06l1.97 1.97H1.75a.75.75 0 1 0 0 1.5h10.379z' clip-rule='evenodd'/%3E%3C/svg%3E\") center right no-repeat;}.wp-block-post-excerpt.is-style-bizenta-recent-post-excerpt a:hover{padding-right:2.4em;transition:padding 500ms ease;}",
	)
);
register_block_style(
	'core/post-date',
	array(
		'name'         => 'bizenta-post-date',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-post-date.is-style-bizenta-post-date{margin-block-start:1.4rem;margin-block-end:1.4rem;border-bottom:1px solid var(--wp--preset--color--base-3);padding-bottom:1.4rem;}',
	)
);
register_block_style(
	'core/post-terms',
	array(
		'name'         => 'bizenta-post-terms',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-post-terms.is-style-bizenta-post-terms{}.wp-block-post-terms.is-style-bizenta-post-terms .wp-block-post-terms__prefix{font-family:var(--wp--preset--font-family--heading);font-weight:900;}.wp-block-post-terms.is-style-bizenta-post-terms .wp-block-post-terms__separator{display:none;}.wp-block-post-terms.is-style-bizenta-post-terms a{display:inline-block;text-decoration:none;padding:0.3em 1.4em;border-radius:2em;border:1px solid var(--wp--preset--color--contrast);margin-left:0.5em;margin-bottom:0.5em;}',
	)
);
register_block_style(
	'core/comment-content',
	array(
		'name'         => 'bizenta-comment-content',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-comment-content.is-style-bizenta-comment-content{margin-block-start:1.4rem;}',
	)
);
register_block_style(
	'core/comment-reply-link',
	array(
		'name'         => 'bizenta-comment-reply-link',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-comment-reply-link.is-style-bizenta-comment-reply-link{margin-block-start:2rem;}.wp-block-comment-reply-link.is-style-bizenta-comment-reply-link a{padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);border-radius:2em;border:1px solid var(--wp--preset--color--base-4);transition:border 500ms ease;text-decoration:none;display:inline-block;}.wp-block-comment-reply-link.is-style-bizenta-comment-reply-link a:hover{border:1px solid var(--wp--preset--color--base-6);transition:border 500ms ease;}',
	)
);
register_block_style(
	'core/comment-author-name',
	array(
		'name'         => 'bizenta-comment-author-name',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-comment-author-name.is-style-bizenta-comment-author-name{font-weight:900;font-size:var(--wp--preset--font-size--medium);font-family:var(--wp--preset--font-family--heading);}.wp-block-comment-author-name.is-style-bizenta-comment-author-name a{text-decoration:none;}',
	)
);
register_block_style(
	'core/comment-date',
	array(
		'name'         => 'bizenta-comment-date',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-comment-date.is-style-bizenta-comment-date a{text-decoration:none;font-size:var(--wp--preset--font-size--small);}',
	)
);
register_block_style(
	'core/comments-pagination',
	array(
		'name'         => 'bizenta-pagination',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-comments-pagination.is-style-bizenta-pagination{margin-block-start:var(--wp--preset--spacing--50);margin-block-end:var(--wp--preset--spacing--50);}',
	)
);
register_block_style(
	'core/comments-pagination-previous',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-comments-pagination-previous.is-style-bizenta{padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);border-radius:2em;border:1px solid var(--wp--preset--color--base-4);transition:border 500ms ease;text-decoration:none;display:inline-block;}.wp-block-comments-pagination-previous.is-style-bizenta:hover{border:1px solid var(--wp--preset--color--base-6);transition:border 500ms ease;}',
	)
);
register_block_style(
	'core/comments-pagination-next',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-comments-pagination-next.is-style-bizenta{padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);border-radius:2em;border:1px solid var(--wp--preset--color--base-4);transition:border 500ms ease;text-decoration:none;display:inline-block;}.wp-block-comments-pagination-next.is-style-bizenta:hover{border:1px solid var(--wp--preset--color--base-6);transition:border 500ms ease;}',
	)
);

register_block_style(
	'core/comments-pagination-numbers',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-comments-pagination-numbers.is-style-bizenta{}.wp-block-comments-pagination-numbers.is-style-bizenta a{margin-right:0.5em;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);border-radius:2em;border:1px solid var(--wp--preset--color--base-4);transition:border 500ms ease;text-decoration:none;display:inline-block;}.wp-block-comments-pagination-numbers.is-style-bizenta a:hover{border:1px solid var(--wp--preset--color--base-6);transition:border 500ms ease;}.wp-block-comments-pagination-numbers.is-style-bizenta span{margin-right:0.5em;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);display:inline-block;}',
	)
);
register_block_style(
	'core/post-comments-form',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-post-comments-form.is-style-bizenta{padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);background-color:var(--wp--preset--color--base-3);}',
	)
);
register_block_style(
	'core/search',
	array(
		'name'         => 'bizenta-sidebar',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-search.is-style-bizenta-sidebar{margin-block-start: 1rem;}',
	)
);
register_block_style(
	'core/categories-list',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-categories-list.is-style-bizenta{margin-block-start: 2rem;padding:0;list-style:none;}.wp-block-categories-list.is-style-bizenta .cat-item{padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--10);border-radius:4px;margin-block-start: 0.7rem;background-color:var(--wp--preset--color--base-3);}.wp-block-categories-list.is-style-bizenta .cat-item a{text-decoration:none;}.wp-block-categories-list.is-style-bizenta .cat-item .children{padding:0;list-style:none;}',
	)
);
register_block_style(
	'core/tag-cloud',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-tag-cloud.is-style-bizenta{margin-block-start: 2rem;}.wp-block-tag-cloud.is-style-bizenta a{padding:0.5em 1.0em;border:1px solid var(--wp--preset--color--base-5);border-radius:2.0em;margin:0 0.5em 0.5em 0;text-decoration:none;}',
	)
);
register_block_style(
	'core/latest-posts',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-latest-posts.is-style-bizenta{margin-block-start: 2rem;}.wp-block-latest-posts.is-style-bizenta li{margin-block-end:2em;}.wp-block-latest-posts.is-style-bizenta li a{text-decoration:none;font-size:var(--wp--preset--font-size--medium);font-family:var(--wp--preset--font-family--heading);font-weight:800;}',
	)
);
register_block_style(
	'core/query-pagination',
	array(
		'name'         => 'bizenta-pagination',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-query-pagination.is-style-bizenta-pagination{margin-block-start:var(--wp--preset--spacing--50);margin-block-end:var(--wp--preset--spacing--50);}',
	)
);
register_block_style(
	'core/query-pagination-previous',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-query-pagination-previous.is-style-bizenta{padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);border-radius:2em;border:1px solid var(--wp--preset--color--base-4);transition:border 500ms ease;text-decoration:none;display:inline-block;}.wp-block-query-pagination-previous.is-style-bizenta:hover{border:1px solid var(--wp--preset--color--base-6);transition:border 500ms ease;}',
	)
);
register_block_style(
	'core/query-pagination-next',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-query-pagination-next.is-style-bizenta{padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);border-radius:2em;border:1px solid var(--wp--preset--color--base-4);transition:border 500ms ease;text-decoration:none;display:inline-block;}.wp-block-query-pagination-next.is-style-bizenta:hover{border:1px solid var(--wp--preset--color--base-6);transition:border 500ms ease;}',
	)
);

register_block_style(
	'core/query-pagination-numbers',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-query-pagination-numbers.is-style-bizenta{}.wp-block-query-pagination-numbers.is-style-bizenta a{margin-right:0.5em;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);border-radius:2em;border:1px solid var(--wp--preset--color--base-4);transition:border 500ms ease;text-decoration:none;display:inline-block;}.wp-block-query-pagination-numbers.is-style-bizenta a:hover{border:1px solid var(--wp--preset--color--base-6);transition:border 500ms ease;}.wp-block-query-pagination-numbers.is-style-bizenta span{margin-right:0.5em;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--20);display:inline-block;}',
	)
);
register_block_style(
	'core/post-template',
	array(
		'name'         => 'bizenta',
		'label'        => __( 'B', 'bizenta' ),
		'inline_style' => '.wp-block-post-template.is-style-bizenta{display:flex !important;gap:2em 0;flex-direction:column;}@media screen and (max-width: 780px){.wp-block-post-template.is-style-bizenta .wp-block-post{flex-basis:100%;}}@media screen and (min-width: 781px){.wp-block-post-template.is-style-bizenta{gap:0 2em;flex-direction:row;}.wp-block-post-template.is-style-bizenta .wp-block-post{flex-basis:33%;}}',
	)
);


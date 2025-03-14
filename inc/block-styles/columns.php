<?php
/**
 * Register column block styles.
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

register_block_style(
	'core/columns',
	array(
		'name'         => 'bizenta-services',
		'label'        => __( 'B S50', 'bizenta' ),
		'inline_style' => '.wp-block-columns.is-style-bizenta-services{margin-top:var(--wp--preset--spacing--50);gap:var(--wp--preset--spacing--40) 0;}@media screen and (min-width : 1201px) {.wp-block-columns.is-style-bizenta-services{gap:0 var(--wp--preset--spacing--40);}}',
	)
);
register_block_style(
	'core/columns',
	array(
		'name'         => 'bizenta-about-item',
		'label'        => __( 'B AI', 'bizenta' ),
		'inline_style' => '.wp-block-columns.is-style-bizenta-about-item{margin-top:var(--wp--preset--spacing--30);}.is-style-bizenta-about-item .wp-block-column:first-child{flex-basis:60px;padding-top:var(--wp--preset--spacing--4);}.is-style-bizenta-about-item .wp-block-column:last-child{flex-basis:calc(100% - 60px);padding-left:var(--wp--preset--spacing--5);}.is-style-bizenta-about-item .wp-block-column:last-child p:last-child{margin-block-start: 0.3rem;}',
	)
);
register_block_style(
	'core/columns',
	array(
		'name'         => 'bizenta-layout',
		'label'        => __( 'B S', 'bizenta' ),
		'inline_style' => '.wp-block-columns.is-style-bizenta-layout{gap:var(--wp--preset--spacing--40) 0;}@media screen and (min-width : 1201px) {.wp-block-columns.is-style-bizenta-layout{gap:0 var(--wp--preset--spacing--40);}}',
	)
);
register_block_style(
	'core/column',
	array(
		'name'         => 'bizenta-about-image',
		'label'        => __( 'B AI', 'bizenta' ),
		'inline_style' => '.wp-block-column.is-style-bizenta-about-image{position:relative;}@media screen and (min-width : 1201px) {.wp-block-column.is-style-bizenta-about-image{padding-left:var(--wp--preset--spacing--50);}}',
	)
);
register_block_style(
	'core/columns',
	array(
		'name'         => 'bizenta-comment',
		'label'        => __( 'B C', 'bizenta' ),
		'inline_style' => '.wp-block-columns.is-style-bizenta-comment{gap:2rem;padding:2em;border:1px solid var(--wp--preset--color--base-3);}',
	)
);
register_block_style(
	'core/column',
	array(
		'name'         => 'bizenta-comment-author',
		'label'        => __( 'B CA', 'bizenta' ),
		'inline_style' => '.wp-block-column.is-style-bizenta-comment-author{flex-basis:100%;}@media screen and (min-width : 1201px) {.wp-block-column.is-style-bizenta-comment-author{flex-basis:80px !important;}}',
	)
);
register_block_style(
	'core/column',
	array(
		'name'         => 'bizenta-comment-content',
		'label'        => __( 'B CC', 'bizenta' ),
		'inline_style' => '.wp-block-column.is-style-bizenta-comment-content{flex-basis:100%;margin-block-start: 0;}@media screen and (min-width : 1201px) {.wp-block-column.is-style-bizenta-comment-content{flex-basis:calc( 100% - 80px ) !important;}}',
	)
);
register_block_style(
	'core/columns',
	array(
		'name'         => 'bizenta-post',
		'label'        => __( 'B CA', 'bizenta' ),
		'inline_style' => '.wp-block-column.is-style-bizenta-post{gap:0 var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);}',
	)
);


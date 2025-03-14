<?php
/**
 * Register group block styles.
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

register_block_style(
	'core/list',
	array(
		'name'         => 'bizenta-footer-menu',
		'label'        => __( 'B FM', 'bizenta' ),
		'inline_style' => '.wp-block-list.is-style-bizenta-footer-menu{margin-block-start:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:0;padding-right:0;margin:0;list-style:none;}',
    )
);
register_block_style(
	'core/list-item',
	array(
		'name'         => 'bizenta-footer-menu-item',
		'label'        => __( 'B FM', 'bizenta' ),
		'inline_style' => '.is-style-bizenta-footer-menu-item{margin-block-start:0;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);color:var(--wp--preset--color--base-2);font-size:var(--wp--preset--font-size--medium);}.is-style-bizenta-footer-menu-item a{color:var(--wp--preset--color--base-2);text-decoration:none;}.is-style-bizenta-footer-menu-item a:hover{color:var(--wp--preset--color--base-5);}',
    )
);

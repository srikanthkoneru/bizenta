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
	'core/social-links',
	array(
		'name'         => 'bizenta-footer-social',
		'label'        => __( 'Zyp F1', 'bizenta' ),
		'inline_style' => '.is-style-bizenta-footer-social{margin:1.5em 0 0 0!important;list-style:none;margin:0;padding:0;gap:1.2rem !important;}.is-style-bizenta-footer-social li{display:inline-block;padding:6px!important;border-radius:4px;background:var(--wp--preset--color--accent-2);color:var(--wp--preset--color--base-2);}.is-style-bizenta-footer-social li a{color:var(--wp--preset--color--base-2);}',
	)
);

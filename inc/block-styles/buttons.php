<?php
/**
 * Register button block styles.
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

register_block_style(
	'core/button',
	array(
		'name'         => 'bizenta-rounded-a6',
		'label'        => __( 'B RA6', 'bizenta' ),
		'inline_style' => '.wp-block-button.is-style-bizenta-rounded-a6 a{border-radius: 2em;padding-top: var(--wp--preset--spacing--10);padding-right: var(--wp--preset--spacing--30);padding-bottom: var(--wp--preset--spacing--10);padding-left: var(--wp--preset--spacing--30);background-color: var(--wp--preset--color--accent-6);font-size:var(--wp--preset--font-size--medium);}',
	)
);
register_block_style(
	'core/button',
	array(
		'name'         => 'bizenta-underline',
		'label'        => __( 'B U', 'bizenta' ),
		'inline_style' => ".wp-block-button.is-style-bizenta-underline a{transition:padding 500ms ease;position:reletive;padding-top: var(--wp--preset--spacing--5);padding-bottom: var(--wp--preset--spacing--5);padding-right:2em;padding-left:0;border-bottom:2px dotted var(--wp--preset--color--contrast);background:none;color:var(--wp--preset--color--contrast);border-radius:0;font-weight:800;background:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 16 16'%3E%3Cpath fill='%23000' fill-rule='evenodd' d='M10.159 10.72a.75.75 0 1 0 1.06 1.06l3.25-3.25L15 8l-.53-.53l-3.25-3.25a.75.75 0 0 0-1.061 1.06l1.97 1.97H1.75a.75.75 0 1 0 0 1.5h10.379z' clip-rule='evenodd'/%3E%3C/svg%3E\") center right no-repeat;}.wp-block-button.is-style-bizenta-underline a:hover{padding-right:2.4em;transition:padding 500ms ease;}",
	)
);

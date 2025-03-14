<?php
/**
 * Register paragraph block styles.
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

register_block_style(
	'core/paragraph',
	array(
		'name'         => 'bizenta-b2center-small',
		'label'        => __( 'B B2CFS', 'bizenta' ),
		'inline_style' => '.is-style-bizenta-b2center-small{margin-block-start:0;color:var(--wp--preset--color--base-2);text-align:center;font-size:var(--wp--preset--font-size--small);}',
	)
);
register_block_style(
	'core/paragraph',
	array(
		'name'         => 'bizenta-about-one-item-heading',
		'label'        => __( 'B B2CFS', 'bizenta' ),
		'inline_style' => '.is-style-bizenta-about-one-item-heading{margin-block-start:0;font-size:var(--wp--preset--font-size--medium);font-weight:800;marging-bottom:var(--wp--preset--spacing--20);}',
	)
);
register_block_style(
	'core/paragraph',
	array(
		'name'         => 'bizenta-yy30',
		'label'        => __( 'B B30', 'bizenta' ),
		'inline_style' => '.is-style-bizenta-yy30{margin-block-start:0 !important;marging-bottom:var(--wp--preset--spacing--30) !important;}',
	)
);

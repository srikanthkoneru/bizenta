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
	'core/heading',
	array(
		'name'         => 'bizenta-footer-menu-heading',
		'label'        => __( 'B FMH', 'bizenta' ),
		'inline_style' => '.wp-block-heading.is-style-bizenta-footer-menu-heading{margin-block-start:0;color:var(--wp--preset--color--base);font-size:var(--wp--preset--font-size--medium-2);font-weight:600;font-style:normal;}',
	)
);
register_block_style(
	'core/heading',
	array(
		'name'         => 'bizenta-hero-heading',
		'label'        => __( 'B HH1', 'bizenta' ),
		'inline_style' => '.wp-block-heading.is-style-bizenta-hero-heading{margin-block-start:0;color:var(--wp--preset--color--contrast);margin-bottom:var(--wp--preset--spacing--30);line-height:1.1;font-size:var(--wp--preset--font-size--xxx-large);}',
	)
);
register_block_style(
	'core/heading',
	array(
		'name'         => 'bizenta-hero-heading-two',
		'label'        => __( 'B HH1', 'bizenta' ),
		'inline_style' => '.wp-block-heading.is-style-bizenta-hero-heading-two{margin-block-start:0;margin-bottom:var(--wp--preset--spacing--40);font-size:var(--wp--preset--font-size--medium-2);font-style:normal;font-weight:600;line-height:1.5}',
	)
);
register_block_style(
	'core/heading',
	array(
		'name'         => 'bizenta-service-heading',
		'label'        => __( 'B SH1', 'bizenta' ),
		'inline_style' => '.wp-block-heading.is-style-bizenta-service-heading{margin-block-start:0;margin-top:var(--wp--preset--spacing--20);font-size: var(--wp--preset--font-size--large);}',
	)
);
register_block_style(
	'core/heading',
	array(
		'name'         => 'bizenta-yy30-fxl',
		'label'        => __( 'B Y30FXL', 'bizenta' ),
		'inline_style' => '.wp-block-heading.is-style-bizenta-yy30-fxl{margin-block-start:0;font-size: var(--wp--preset--font-size--x-large);margin-bottom:var(--wp--preset--spacing--30);}',
	)
);


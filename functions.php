<?php
/**
 * Functions.
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

/**
 * Autoloader
 */
require_once 'vendor/autoload.php';

/**
 * Add fonts.
 *
 * @since    1.0.0
 */
function bizenta_preload_fonts() {

	?>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/montserrat/montserrat-v26-latin-700.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/montserrat/montserrat-v26-latin-800.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/montserrat/montserrat-v26-latin-900.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/montserrat/montserrat-v26-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/open-sans/open-sans-v40-latin-800.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/open-sans/open-sans-v40-latin-italic.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/open-sans/open-sans-v40-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/open-sans/open-sans-v40-latin-700.woff2" as="font" type="font/woff2" crossorigin>
	<?php

}

add_action( 'wp_head', 'bizenta_preload_fonts', 1 );

/**
 * Enqueue Assets.
 *
 * @since    1.0.0
 */
function bizenta_enqueue_assets() {

	$bizenta_variables             = array();
	$bizenta_variables['assetDir'] = esc_url( get_stylesheet_directory_uri() ) . '/assets/';

	$bizenta_variables['bg'] = array(
		'hero' => $bizenta_variables['assetDir'] . 'images/hero/one.webp',
	);

	wp_register_script( 'bizenta-theme', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
	wp_localize_script( 'bizenta-theme', 'bizentaVariables', $bizenta_variables );
	wp_enqueue_script( 'bizenta-theme' );
	wp_enqueue_script( 'bizenta-aos', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/aos.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'bizenta_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'bizenta_enqueue_assets' );

/**
 * Enqueue block editor assets.
 *
 * @since    1.0.0
 */
function bizenta_enqueue_block_editor_assets() {

}
add_action( 'enqueue_block_editor_assets', 'bizenta_enqueue_block_editor_assets' );

/**
 * Set the default image if none exists.
 *
 * @param string $html              The post thumbnail HTML.
 * @param int    $post_id           The post ID.
 * @param int    $post_thumbnail_id The post thumbnail ID.
 * @return html
 */
function bizenta_fallback_post_thumbnail_html( $html, $post_id, $post_thumbnail_id ) {

	if ( empty( $html ) ) {
		$html = '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/default-600-400-2.webp" width="400" height="200" loading="lazy" alt="' . get_the_title( $post_id ) . '" />';
	}

	return $html;

}
add_filter( 'post_thumbnail_html', 'bizenta_fallback_post_thumbnail_html', 5, 3 );

/**
 * Set the default image if none exists.
 */
function bizenta_pattern_categories() {
	register_block_pattern_category(
		'bizenta',
		array( 'label' => __( 'bizenta', 'bizenta' ) )
	);

}

add_action( 'init', 'bizenta_pattern_categories' );

/**
 * Register block styles.
 *
 * @since    1.0.0
 */
function bizenta_register_block_styles() {

	foreach ( glob( __DIR__ . '/inc/block-styles/*.php' ) as $file ) {
		include_once $file;
	}
}
add_action( 'init', 'bizenta_register_block_styles' );


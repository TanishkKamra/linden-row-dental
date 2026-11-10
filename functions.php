<?php
/**
 * Linden Row Dental theme functions.
 *
 * @package linden-row-dental
 */

defined( 'ABSPATH' ) || exit;

/**
 * Load the theme stylesheet in the editor too, so blocks look the same there.
 */
function linden_row_dental_setup() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'linden_row_dental_setup' );

/**
 * Front-end stylesheet and the small script behind the demo booking form.
 */
function linden_row_dental_assets() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'linden-row-dental', get_stylesheet_uri(), array(), $version );
	wp_enqueue_script(
		'linden-row-dental',
		get_theme_file_uri( 'assets/js/site.js' ),
		array(),
		$version,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'linden_row_dental_assets' );

/**
 * Preload both fonts: the hero headline is the largest paint on the home page.
 */
function linden_row_dental_preload_fonts() {
	foreach ( array( 'fraunces.woff2', 'instrument-sans.woff2' ) as $font ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( get_theme_file_uri( 'assets/fonts/' . $font ) )
		);
	}
}
add_action( 'wp_head', 'linden_row_dental_preload_fonts', 1 );

/**
 * Pattern category for the theme's section patterns.
 */
function linden_row_dental_pattern_category() {
	register_block_pattern_category(
		'linden-row-dental',
		array( 'label' => __( 'Linden Row Dental', 'linden-row-dental' ) )
	);
}
add_action( 'init', 'linden_row_dental_pattern_category' );

/**
 * Theme images are not in the media library, so WordPress cannot pick loading
 * hints for them. The hero loads first; every other image waits until needed.
 *
 * @param string $html  Rendered image block.
 * @param array  $block Parsed block.
 * @return string
 */
function linden_row_dental_image_loading( $html, $block ) {
	$tags = new WP_HTML_Tag_Processor( $html );
	if ( ! $tags->next_tag( 'img' ) ) {
		return $html;
	}

	$class_name = isset( $block['attrs']['className'] ) ? $block['attrs']['className'] : '';
	if ( false !== strpos( $class_name, 'lr-hero-image' ) ) {
		$tags->set_attribute( 'fetchpriority', 'high' );
	} else {
		$tags->set_attribute( 'loading', 'lazy' );
		$tags->set_attribute( 'decoding', 'async' );
	}

	return $tags->get_updated_html();
}
add_filter( 'render_block_core/image', 'linden_row_dental_image_loading', 10, 2 );

// No emoji polyfill: the site uses none, and it saves a script on every page.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

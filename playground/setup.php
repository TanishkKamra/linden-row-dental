<?php
/**
 * Demo setup for WordPress Playground. Not loaded by the theme.
 *
 * The blueprint runs this once: it names the site, turns on pretty permalinks,
 * removes the default sample content and creates the two inner pages.
 *
 * @package linden-row-dental
 */

defined( 'ABSPATH' ) || exit;

update_option( 'blogname', 'Linden Row Dental' );
update_option( 'blogdescription', 'A private dental practice in Clifton, Bristol' );

// Through $wp_rewrite, not update_option(), so the flush below builds rules for
// the new structure. Otherwise unknown URLs fall through to the home page, not 404.
global $wp_rewrite;
$wp_rewrite->set_permalink_structure( '/%postname%/' );

foreach ( array( 'hello-world' => 'post', 'sample-page' => 'page' ) as $linden_row_dental_slug => $linden_row_dental_type ) {
	$linden_row_dental_default = get_page_by_path( $linden_row_dental_slug, OBJECT, $linden_row_dental_type );
	if ( $linden_row_dental_default ) {
		wp_delete_post( $linden_row_dental_default->ID, true );
	}
}

$linden_row_dental_pages = array(
	'prices' => array( 'Prices', 'linden-row-dental/page-prices' ),
	'book'   => array( 'Book a visit', 'linden-row-dental/page-book' ),
);

foreach ( $linden_row_dental_pages as $linden_row_dental_slug => $linden_row_dental_page ) {
	if ( get_page_by_path( $linden_row_dental_slug ) ) {
		continue;
	}
	wp_insert_post(
		array(
			'post_type'    => 'page',
			'post_status'  => 'publish',
			'post_name'    => $linden_row_dental_slug,
			'post_title'   => $linden_row_dental_page[0],
			'post_content' => '<!-- wp:pattern {"slug":"' . $linden_row_dental_page[1] . '"} /-->',
			'meta_input'   => array( '_wp_page_template' => 'page-landing' ),
		)
	);
}

flush_rewrite_rules();

<?php
/**
 * Title: Page: full price list
 * Slug: linden-row-dental/page-prices
 * Categories: linden-row-dental
 * Post Types: page
 *
 * @package linden-row-dental
 */

$linden_row_dental_price_groups = array(
	'Check-ups and hygiene'          => array(
		array( 'New patient exam, 45 minutes, x-rays included', '£75' ),
		array( 'Check-up', '£55' ),
		array( 'Check-up for children of patients, under 18', '£30' ),
		array( 'Hygienist, 30 minutes', '£70' ),
		array( 'Hygienist, 45 minutes', '£95' ),
		array( 'Small x-ray outside an exam', '£25' ),
	),
	'Fillings and repairs'           => array(
		array( 'White filling, small', 'from £140' ),
		array( 'White filling, large', 'from £195' ),
		array( 'Temporary filling', '£60' ),
		array( 'Repair to a chipped tooth', 'from £120' ),
	),
	'Root canal treatment'           => array(
		array( 'Front tooth', 'from £450' ),
		array( 'Premolar', 'from £600' ),
		array( 'Molar', 'from £750' ),
	),
	'Crowns, bridges and dentures'   => array(
		array( 'Porcelain crown', 'from £695' ),
		array( 'Gold crown', 'from £850' ),
		array( 'Bridge, per tooth', 'from £695' ),
		array( 'Partial denture', 'from £650' ),
		array( 'Full denture', 'from £950' ),
	),
	'Extractions'                    => array(
		array( 'Simple extraction', 'from £150' ),
		array( 'Surgical extraction', 'from £295' ),
	),
	'Whitening and straightening'    => array(
		array( 'Home whitening, trays and gel', '£350' ),
		array( 'Whitening gel top-up', '£40' ),
		array( 'Composite bonding, per tooth', 'from £250' ),
		array( 'Clear aligners', 'from £2,800' ),
	),
	'Emergencies'                    => array(
		array( 'Emergency appointment, including any x-rays and temporary treatment', '£85' ),
	),
);
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size">Prices</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lr-lead","fontSize":"medium"} -->
<p class="lr-lead has-medium-font-size">Every price we charge, in one place. Your written plan confirms the total before any treatment starts, and the price on the plan is the price you pay.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--70)"><?php foreach ( $linden_row_dental_price_groups as $linden_row_dental_group => $linden_row_dental_rows ) : ?><!-- wp:columns {"align":"wide","className":"lr-price-group","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide lr-price-group"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html( $linden_row_dental_group ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:table {"hasFixedLayout":false,"className":"lr-table"} -->
<figure class="wp-block-table lr-table"><table><thead><tr><th>Treatment</th><th>Price</th></tr></thead><tbody><?php foreach ( $linden_row_dental_rows as $linden_row_dental_row ) : ?><tr><td><?php echo esc_html( $linden_row_dental_row[0] ); ?></td><td><?php echo esc_html( $linden_row_dental_row[1] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --><?php endforeach; ?>

<!-- wp:group {"align":"wide","className":"lr-price-notes","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide lr-price-notes"><!-- wp:paragraph -->
<p><strong>Paying.</strong> Card, Apple Pay or Google Pay at the end of each visit. Plans over £500 can be spread over up to 12 months.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>“From” prices.</strong> These cover the simplest version of a treatment. If yours is more involved, the plan will say so, and why, before we start.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"linden-row-dental/cta"} /-->

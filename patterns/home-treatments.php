<?php
/**
 * Title: Home: treatments
 * Slug: linden-row-dental/home-treatments
 * Categories: linden-row-dental
 *
 * @package linden-row-dental
 */

$linden_row_dental_treatments = array(
	array( 'Check-ups and hygiene', 'A proper look every six to twelve months, and a hygienist who doesn’t lecture.', 'From £55' ),
	array( 'Fillings', 'Tooth-coloured fillings, shade-matched in daylight rather than under the lamp.', 'From £140' ),
	array( 'Root canal', 'Done under a microscope, usually in one visit. Far less dramatic than its reputation.', 'From £450' ),
	array( 'Crowns and bridges', 'Made by a local dental lab and fitted over two visits, with a temporary in between.', 'From £695' ),
	array( 'Extractions', 'When a tooth can’t be saved we’ll say so plainly, then talk through what comes next.', 'From £150' ),
	array( 'Whitening', 'Home trays made to fit your teeth. Most people see the result within three weeks.', '£350' ),
	array( 'Clear aligners', 'For crowding and gaps in adults. We’ll tell you honestly if they won’t work for you.', 'From £2,800' ),
	array( 'Emergencies', 'Slots held back every weekday morning for pain and breakages. Call from 8 am.', '£85' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"treatments","align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section id="treatments" class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","className":"lr-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide lr-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading">Treatments</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lr-section-intro","textColor":"muted"} -->
<p class="lr-section-intro has-muted-color has-text-color">Everyday dentistry done carefully, plus a few things people cross Bristol for.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"lr-treatments","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"grid","minimumColumnWidth":"15rem"}} -->
<div class="wp-block-group alignwide lr-treatments" style="margin-top:var(--wp--preset--spacing--50)"><?php foreach ( $linden_row_dental_treatments as $linden_row_dental_item ) : ?><!-- wp:group {"className":"lr-treatment","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group lr-treatment"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $linden_row_dental_item[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $linden_row_dental_item[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"lr-from","fontSize":"small"} -->
<p class="lr-from has-small-font-size"><?php echo esc_html( $linden_row_dental_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

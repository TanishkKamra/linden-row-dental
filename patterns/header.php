<?php
/**
 * Title: Header
 * Slug: linden-row-dental/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package linden-row-dental
 */

?>
<!-- wp:group {"align":"full","className":"lr-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lr-header"><!-- wp:group {"align":"wide","className":"lr-topbar","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide lr-topbar has-small-font-size" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"className":"lr-hide-sm"} -->
<p class="lr-hide-sm">Linden Row, Clifton, Bristol BS8</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"lr-hide-sm"} -->
<p class="lr-hide-sm">Open until 7 pm on Tuesdays and Thursdays</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:+441174960123">Call 0117 496 0123</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"lr-masthead","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide lr-masthead" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:site-title {"level":0} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"base","overlayTextColor":"contrast","className":"lr-nav","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Treatments","url":"<?php echo esc_url( home_url( '/#treatments' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Prices","url":"<?php echo esc_url( home_url( '/prices/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"First visit","url":"<?php echo esc_url( home_url( '/#first-visit' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Team","url":"<?php echo esc_url( home_url( '/#team' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Find us","url":"<?php echo esc_url( home_url( '/#find-us' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Book a visit","url":"<?php echo esc_url( home_url( '/book/' ) ); ?>","kind":"custom","className":"lr-nav-book","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"lr-header-cta"} -->
<div class="wp-block-buttons lr-header-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>">Book a visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

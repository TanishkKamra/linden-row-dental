<?php
/**
 * Title: Home: hero
 * Slug: linden-row-dental/home-hero
 * Categories: linden-row-dental
 *
 * @package linden-row-dental
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"lr-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull lr-hero" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","className":"lr-hero-copy"} -->
<div class="wp-block-column is-vertically-aligned-center lr-hero-copy" style="flex-basis:55%"><!-- wp:paragraph {"className":"lr-kicker","textColor":"muted","fontSize":"small"} -->
<p class="lr-kicker has-muted-color has-text-color has-small-font-size">Private dental practice in Clifton, Bristol</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Dentistry for people who’d rather not be here.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lr-lead","fontSize":"medium"} -->
<p class="lr-lead has-medium-font-size">Unhurried appointments, a dentist who explains before they start, and prices you can read before you sit down. New patients welcome, nervous ones especially.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>">Book a first visit</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/prices/' ) ); ?>">See our prices</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:list {"className":"lr-facts"} -->
<ul class="wp-block-list lr-facts"><!-- wp:list-item -->
<li><strong>45 min</strong> for a first visit, never rushed</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Until 7 pm</strong> on Tuesdays and Thursdays</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>£75</strong> new patient exam, x-rays included</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"lr-hero-image"} -->
<figure class="wp-block-image size-full lr-hero-image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="A dentist chatting with a smiling patient in a bright treatment room" style="aspect-ratio:4/5;object-fit:cover"/><figcaption class="wp-element-caption">A first visit starts with a conversation, not the chair.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

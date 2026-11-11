<?php
/**
 * Title: Page: book a visit
 * Slug: linden-row-dental/page-book
 * Categories: linden-row-dental
 * Post Types: page
 *
 * @package linden-row-dental
 */

?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size">Book a first visit</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"lr-lead","fontSize":"medium"} -->
<p class="lr-lead has-medium-font-size">Tell us a little about what you need. We’ll reply within one working day with two or three times to choose from.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"lr-aside","layout":{"type":"default"}} -->
<div class="wp-block-group lr-aside"><!-- wp:paragraph -->
<p><strong>Prefer to talk?</strong> Call <a href="tel:+441174960123">0117 496 0123</a>. Reception is open from 8 am.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>In pain?</strong> Please call rather than booking here, so we can try to see you today.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:html -->
<form class="lr-form" method="post" data-demo-form aria-describedby="lr-form-note">
	<div class="lr-field-row">
		<p class="lr-field"><label for="lr-name">Your name</label><input id="lr-name" name="name" type="text" autocomplete="name" required></p>
		<p class="lr-field"><label for="lr-email">Email</label><input id="lr-email" name="email" type="email" autocomplete="email" required></p>
	</div>
	<div class="lr-field-row">
		<p class="lr-field"><label for="lr-phone">Phone <span class="lr-optional">(optional)</span></label><input id="lr-phone" name="phone" type="tel" autocomplete="tel"></p>
		<p class="lr-field"><label for="lr-reason">What’s it for?</label><select id="lr-reason" name="reason"><option>A first check-up</option><option>Something hurts or has broken</option><option>A hygienist visit</option><option>Whitening or aligners</option><option>Something else</option></select></p>
	</div>
	<fieldset class="lr-field">
		<legend>Days that suit you</legend>
		<div class="lr-chips">
			<label class="lr-chip"><input type="checkbox" name="days" value="Monday"> Mon</label>
			<label class="lr-chip"><input type="checkbox" name="days" value="Tuesday"> Tue</label>
			<label class="lr-chip"><input type="checkbox" name="days" value="Wednesday"> Wed</label>
			<label class="lr-chip"><input type="checkbox" name="days" value="Thursday"> Thu</label>
			<label class="lr-chip"><input type="checkbox" name="days" value="Friday"> Fri</label>
			<label class="lr-chip"><input type="checkbox" name="days" value="Saturday"> Sat</label>
		</div>
	</fieldset>
	<p class="lr-field"><label for="lr-notes">Anything we should know? <span class="lr-optional">(optional)</span></label><textarea id="lr-notes" name="notes" rows="4"></textarea></p>
	<p class="lr-check"><input id="lr-nervous" name="nervous" type="checkbox"><label for="lr-nervous">I get nervous at the dentist. Please book me a longer first visit.</label></p>
	<p class="lr-submit"><button type="submit" class="wp-element-button">Send booking request</button></p>
	<p class="lr-form-note" id="lr-form-note">This is a design sample, so the form doesn’t send anything.</p>
	<p class="lr-form-status" role="status"></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

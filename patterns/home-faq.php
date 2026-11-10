<?php
/**
 * Title: Home: questions
 * Slug: linden-row-dental/home-faq
 * Categories: linden-row-dental
 *
 * @package linden-row-dental
 */

$linden_row_dental_questions = array(
	array( 'Do you take NHS patients?', 'We’re a private practice, so we don’t offer NHS treatment. If you need an NHS dentist, the NHS website can help you find one nearby.' ),
	array( 'Can I spread the cost?', 'Yes. For treatment plans over £500 you can pay in monthly instalments over up to 12 months. Ask when we give you your plan.' ),
	array( 'What if I need to cancel?', 'Give us 24 hours’ notice and there’s no charge. With less notice we may charge £25, but never the first time.' ),
	array( 'Do you see children?', 'Yes. Children of our patients have check-ups for £30 until they turn 18, and we keep their visits short and pleasantly dull.' ),
	array( 'I’m in pain right now. What should I do?', 'Call us from 8 am on 0117 496 0123. We keep emergency slots free every weekday morning. Out of hours, call NHS 111.' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"questions","align":"full","className":"lr-rule-top","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section id="questions" class="wp-block-group alignfull lr-rule-top" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"36%"} -->
<div class="wp-block-column" style="flex-basis:36%"><!-- wp:heading -->
<h2 class="wp-block-heading">Questions people ask</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Something else? Call <a href="tel:+441174960123">0117 496 0123</a> or email <a href="mailto:hello@lindenrow.example">hello@lindenrow.example</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"lr-faq"} -->
<div class="wp-block-column lr-faq"><?php foreach ( $linden_row_dental_questions as $linden_row_dental_qa ) : ?><!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( $linden_row_dental_qa[0] ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( $linden_row_dental_qa[1] ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

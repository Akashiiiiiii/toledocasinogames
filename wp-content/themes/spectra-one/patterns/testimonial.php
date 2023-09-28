<?php
/**
 * Title: Testimonial
 * Slug: spectra-one/testimonial
 * Categories: featured
 * Keywords: Testimonial
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [$get_url . "assets/image/quote.svg"];
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium"}},"border":{"radius":"24px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":145,"sizeSlug":"large","linkDestination":"none","className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-large swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-145"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"heading","fontSize":"x-large"} -->
<p class="has-text-align-center has-heading-color has-text-color has-x-large-font-size"><?php esc_html_e( 'No matter where you go, It\'s the coolest, most happening thing around! Not able to tell you how happy I am with it.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"heading"} -->
<p class="has-text-align-center has-heading-color has-text-color"><?php esc_html_e( 'Cameron Williamson', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Director of Ucla', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php
/**
 * Title: Call to action.
 * Slug: spectra-one/call-to-action
 * Categories: banner
 * Keywords: Call to action
 */

$get_url = trailingslashit( get_template_directory_uri());

$images = array(
	$get_url . 'assets/image/cta-bg-img.png',
);
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
    <!-- wp:columns {"align":"wide","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"foreground"} -->
    <div class="wp-block-columns alignwide has-foreground-background-color has-background"
        style="border-radius:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"},"fontSize":"xx-large"} -->
        <div class="wp-block-column is-vertically-aligned-center has-xx-large-font-size"
            style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"
                style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:heading {"style":{"typography":{"letterSpacing":"-1px"}},"textColor":"background","className":"wp-block-heading"} -->
                <h2 class="wp-block-heading has-background-color has-text-color" style="letter-spacing:-1px"><?php esc_html_e( 'Take your website to the next level!', 'spectra-one' ); ?></h2>
                <!-- /wp:heading -->
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%">
            <!-- wp:image {"id":188,"width":592,"height":338,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"24px","bottomLeft":"0px","bottomRight":"24px"}}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img
                    src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-188"
                    style="border-top-left-radius:0px;border-top-right-radius:24px;border-bottom-left-radius:0px;border-bottom-right-radius:24px"
                    width="592" height="338" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
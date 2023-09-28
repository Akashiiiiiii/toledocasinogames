<?php
/**
 * Title: Banner wide
 * Slug: spectra-one/banner-wide
 * Categories: banner
 * Keywords: Banner wide
 */

 $get_url = trailingslashit(get_template_directory_uri());

 $images = [$get_url . "assets/image/banner-wide-img.jpg"];
 ?>
 
 <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
 <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns {"align":"wide","style":{"border":{"radius":"24px"},"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|medium","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"primary"} -->
 <div class="wp-block-columns alignwide has-primary-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--medium);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"bottom"} -->
 <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"id":110,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"20px","bottomLeft":"24px","bottomRight":"0px"}}}} -->
 <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-110" style="border-top-right-radius:20px;border-bottom-left-radius:24px;border-bottom-right-radius:0px"/></figure>
 <!-- /wp:image --></div>
 <!-- /wp:column -->
 
 <!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|xx-large","padding":{"right":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","top":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
 <div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"style":{"typography":{"letterSpacing":"-1px"}},"textColor":"white","className":"wp-block-heading"} -->
 <h2 class="wp-block-heading has-white-color has-text-color" style="letter-spacing:-1px"><?php esc_html_e( 'Customize your website visually and see the changes instantly!', 'spectra-one' ); ?></h2>
 <!-- /wp:heading -->
 
 <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
 <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
 <div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"white","className":"wp-block-heading"} -->
 <h4 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( '100+', 'spectra-one' ); ?></h4>
 <!-- /wp:heading -->
 
 <!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
 <p class="has-white-color has-text-color has-small-font-size"><?php esc_html_e( 'Block patterns', 'spectra-one' ); ?></p>
 <!-- /wp:paragraph --></div>
 <!-- /wp:group -->
 
 <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
 <div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"white","className":"wp-block-heading"} -->
 <h4 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( '20+', 'spectra-one' ); ?></h4>
 <!-- /wp:heading -->
 
 <!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
 <p class="has-white-color has-text-color has-small-font-size"><?php esc_html_e( 'Style variations', 'spectra-one' ); ?></p>
 <!-- /wp:paragraph --></div>
 <!-- /wp:group -->
 
 <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
 <div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"white","className":"wp-block-heading"} -->
 <h4 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( '48', 'spectra-one' ); ?></h4>
 <!-- /wp:heading -->
 
 <!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
 <p class="has-white-color has-text-color has-small-font-size"><?php esc_html_e( 'Pre-built templates', 'spectra-one' ); ?></p>
 <!-- /wp:paragraph --></div>
 <!-- /wp:group --></div>
 <!-- /wp:group --></div>
 <!-- /wp:column --></div>
 <!-- /wp:columns --></div>
 <!-- /wp:group -->
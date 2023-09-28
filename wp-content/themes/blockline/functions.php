
<?php
/**
 * 
 * Blockline functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blockline
 * @since Blockline 1.0
 */


if ( ! function_exists( 'blockline_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Blockline 1.0
	 *
	 * @return void
	 */
	function blockline_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		//define
		define( 'BLOCKLINE_VERSION', '1.0.0' );
	    define( 'BLOCKLINE_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
	    define( 'BLOCKLINE_DIR', trailingslashit( get_template_directory() ) );
	    define( 'BLOCKLINE_URL', trailingslashit( get_template_directory_uri() ) );

	}

endif;

add_action( 'after_setup_theme', 'blockline_support' );

if ( ! function_exists( 'blockline_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Blockline 1.0
	 *
	 * @return void
	 */
	function blockline_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'blockline-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'blockline-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'blockline_styles' );


// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

//theme option panel
require get_template_directory() . '/theme-option/theme-option.php';









add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	// Slick CSS & JS files
	wp_register_style('slick-css', get_template_directory_uri() .'/css/slick.css');
	wp_register_style('slick-theme-css', get_template_directory_uri() .'/css/slick-theme.css');
	wp_enqueue_script('jquery-min-js', get_template_directory_uri().'/js/jquery-1.11.0.min.js', array(), '1.11.0');		
	wp_enqueue_script('slick-min-js', get_template_directory_uri().'/js/slick.min.js');		

	// Our Custom JS (we'll initialize slick here)
	wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom-js.js', array(), '1.0.0');

	// Enqueue all CSS & JS files
	wp_enqueue_style('slick-css');
	wp_enqueue_style('slick-theme-css');
	wp_enqueue_script('jquery-min-js');
	wp_enqueue_script('slick-min-js');
	wp_enqueue_script('custom-js');
}





/**
 * Register all shortcodes here
 */
add_action( 'init', 'register_shortcodes' );
function register_shortcodes() {
	add_shortcode( 'simple_slick_slider', 'sc_simple_slick_slider' );
	add_shortcode( 'post_slick_carousel_slider', 'sc_post_slick_carousel_slider' );
}

/**
 * "simple_slick_slider" shortcode callback function - responsible for outputting the HTML markup of your images w/ text in a simple slider.
 */
function sc_simple_slick_slider ( $atts ) {


	$output = '<div class="simple-slick-slider">';
	$output .= 		'<div>';
	$output .= 			'<div>';
	$output .=				'<a href = "#">';
	$output .= 					'<img src="http://210.14.26.246/wp-content/uploads/2023/03/bingo2-5.png">';
	$output .=				'</a>';
	$output .= 			'</div>';
	$output .= 		'</div>';
	$output .= 		'<div>';
	$output .= 			'<div>';
	$output .=				'<a href = "#">';
	$output .= 					'<img src="http://210.14.26.246/wp-content/uploads/2023/03/slot-5.png">';
	$output .=				'</a>';
	$output .= 			'</div>';
	$output .= 		'</div>';
	$output .= 		'<div>';
	$output .= 			'<div>';
	$output .=				'<a href = "#">';
	$output .= 					'<img src="http://210.14.26.246/wp-content/uploads/2023/03/Table-6.png">';
	$output .=				'</a>';
	$output .= 			'</div>';
	$output .= 		'</div>';	
	$output .= 		'<div>';
	$output .= 			'<div>';
	$output .=				'<a href = "#">';
	$output .= 					'<img src="http://210.14.26.246/wp-content/uploads/2023/03/virtual-3.png">';
	$output .=				'</a>';
	$output .= 			'</div>';
	$output .= 		'</div>';
	$output .= 		'<div>';
	$output .= 			'<div>';
	$output .=				'<a href = "#">';
	$output .= 					'<img src="http://210.14.26.246/wp-content/uploads/2023/03/specialty-3.png">';
	$output .=				'</a>';
	$output .= 			'</div>';
	$output .= 		'</div>';
	$output .= '</div>';
	

	return $output;
}

/**
 * "post_slick_carousel_slider" shortcode callback function - responsible for outputting the HTML markup of your posts/custom posts in a carousel slider.
 */
function sc_post_slick_carousel_slider ( $atts ) {

  global $wp_query, $post;

  $posts = new WP_Query( array(
    'post_type' => 'post', 
    'post_status' => 'publish',  
    'orderby' => 'date', 
    'order' => 'ASC'
	) );

  if( ! $posts->have_posts() ) {
		return false;
  }

  $output = '<div class="post-slick-carousel-slider">';

  while( $posts->have_posts() ) {
		$posts->the_post();
		$post_ID = get_the_ID();
		$post_title = get_the_title();
		$post_exerpt = get_the_excerpt();
		$post_featured_image = wp_get_attachment_image( get_post_thumbnail_id( $post_ID ), 'single-post-thumbnail', $icon, $attr );
		$post_link = get_post_permalink();

		$output .= '<div>';
		$output .= 		'<div>';
		$output .= 			$post_featured_image;
		$output .= 			'<div>';
		$output .= 				'<h3>'.$post_title.'</h3>';
		$output .= 				'<p>'.$post_exerpt.'</p>';
		$output .= 				'<a href="'.$post_link.'">Read More</a>';
		$output .= 			'</div>';
		$output .= 		'</div>';
		$output .= '</div>';		
	}

	$output .= '</div>';

  return $output;
}
<?php
/**
 * Combany functions and definitions
 *
 *
 * @package WordPress
 * @subpackage combany
 * @since 1.0.0
 */

// REGISTER STYLE
function combany_resources() {
   
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'combany_resources');

function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

// REGISTER MENU
register_nav_menus( array( 
        'header' => 'Header menu', 
        'footer' => 'Footer menu' 
      ) );

add_theme_support('post-thumbnails');

add_image_size( 'slider-image', 431, 294 );

//LIMIT EXCERPT TO 20 CHARS
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// ADD STYLESHEET
function add_stylesheet() {
	
	wp_deregister_script('jquery');
	wp_deregister_script('jqueryMin');
	
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js', array(), null, true);
	wp_enqueue_script('jqueryMin', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), null, true);
	wp_enqueue_script('slick.js', get_template_directory_uri() . '/slick/slick.min.js', array(), null, true);
	wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js', array(), null, true);
	
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), filemtime('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'), false);
	wp_enqueue_style('fontawesome.css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), filemtime('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'), false);
	wp_enqueue_style('slick.css', get_template_directory_uri() . '/slick/slick.css', array(), filemtime(get_template_directory() . '/slick/slick.css'), false);
	wp_enqueue_style('slick-theme.css', get_template_directory_uri() . '/slick/slick-theme.css', array(), filemtime(get_template_directory() . '/slick/slick-theme.css'), false);

}

add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

// CUSTOM MENU
function get_custom_menu() {
		$menuLocations = get_nav_menu_locations(); 
		$menuID = $menuLocations['header'];
		$primaryNav = wp_get_nav_menu_items($menuID);
						 
		$i = 1;
		foreach ( $primaryNav as $navItem ) {
			echo '<a class="news__menu-item" href="'.$navItem->url.'" data-menuItemOrder="'. $i++ .'" title="'.$navItem->title.'">
				<li>'.$navItem->title.'</li>
				</a>';
		}
	}

    if ( !is_admin() ) {
    	require(get_template_directory() . '/custom-style.php');
    }
    
    if (is_admin()) {
      require(get_template_directory() . '/inc/combany-post-types.php');   
    }

	require(get_stylesheet_directory() . '/inc/combany-customizer.php');
	new Combany_Customizer();

function combany_custom_rest() {
  register_rest_field('careers', array(
    'get_callback' => function() {
		return 'test'; }
  ));
}

add_action('rest_api_init', 'combany_custom_rest');

	
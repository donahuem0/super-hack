<?php 
require_once('wp_bootstrap_navwalker.php');

/** 
 * Theme Stylesheets
 */

function fitness_theme_style(){ 
  wp_enqueue_style( 
    $handle = 'fitness',
    $src = get_stylesheet_uri(),
    $deps = array('bootstrap-style', 'google-fonts'),
    $vers = '0.0.1',
    $media = 'all');
    
  wp_enqueue_style( 
    $handle = 'fitness-style-sheet',
    $src = get_template_directory_uri()."/css/fitness.css",
    $deps = array('fitness'),
    $vers = '0.0.1',
    $media = 'all');
    
  wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' , array(), '3.3.7', 'all');
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=PT+Sans|Special+Elite' );
} 

add_action('wp_enqueue_scripts' , 'fitness_theme_style' );


/**
 * Theme scripts
 */

function fitness_theme_script(){ 
  wp_enqueue_script( 
    $handle = 'fitness-script',
    $src = get_template_directory_uri()."/js/fitness.js",
    $deps = array('jquery', 'bs-js'),
    $vers = '0.0.1',
    $infooter = true);
    
  wp_enqueue_script('awesome-font', 'https://use.fontawesome.com/cd6d7a86ba.js', array('bs-js'), '4.7.0', true);
  wp_enqueue_script( 'bs-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
}
        
add_action('wp_enqueue_scripts' , 'fitness_theme_script' );


/** 
 * Theme support
 */

function fitness_theme_support(){
  //Menus
  register_nav_menu('primary' , 'Primary Navigation Menu');
  register_nav_menu('secondary' , 'Secondary Navigation Menu');
  
  //Content Types
  add_theme_support( 'post-formats', array( 'aside', 'quote', 'image', 'video' ) );
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'fitness_theme_support');

/** 
 * 1) Looks to see if "slider" category exists
 * 2) If it does, gets the category ID
 * 3) Excludes that cat id from the main blog page
*/
function exclude_category( $query ) {
  $sliderCat = term_exists('slider');
  if ($sliderCat !== 0 && $sliderCat !== null) {
    $sliderCat = '-'.$sliderCat;
    if ( $query->is_home() && $query->is_main_query() ) {
      $query->set( 'cat', $sliderCat );
    }
  }
}
add_action( 'pre_get_posts', 'exclude_category' );

/**
 * News Widget - Maybe later we can develop this
 
function fitnews_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'FitNews',
			'id'	=> 'sidebar-1',
			'class'	=> 'fitnews',
			'description' => 'News Exerpts Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	
}
add_action('widgets_init','fitnews_widget_setup');
*/

?>
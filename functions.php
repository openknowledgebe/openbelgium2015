<?php
/**
 * datadays functions and definitions
 *
 * @package datadays
 */


//if (!is_admin()) {
  
//}

add_action("wp_enqueue_scripts", "datadays_frontend_js");
add_action("wp_enqueue_scripts", "datadays_frontend_css");

function datadays_frontend_js() {
   wp_deregister_script('jquery');
   wp_deregister_script('bootstrap');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrap');
}

function datadays_frontend_css() {
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css');
  wp_register_style( 'datadays', get_stylesheet_uri(), array( 'bootstrap' ));
  wp_enqueue_style( 'datadays' );
}
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'datadays_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function datadays_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on datadays, use a find and replace
	 * to change 'datadays' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'datadays', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'datadays' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'datadays_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
  /**
	 * Add thumbnails
	 */
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'article', 'dd-speaker'));
}
endif; // datadays_setup
add_action( 'after_setup_theme', 'datadays_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function datadays_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'datadays' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'datadays_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function datadays_scripts() {
	wp_enqueue_style( 'datadays-style', get_stylesheet_uri() );

	wp_enqueue_script( 'datadays-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'datadays-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'datadays-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'datadays_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Register custom navigation walker
 */
require_once('wp_bootstrap_navwalker.php');

?>
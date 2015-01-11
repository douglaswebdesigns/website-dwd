<?php
/**
 * mrchandler functions and definitions
 *
 * @package mrchandler
 */

// Include the Redux theme options Framework
if ( !class_exists( 'ReduxFramework' ) ) {
	require_once( get_template_directory() . '/redux/framework.php' );
}

// Register all the theme options
require_once( get_template_directory() . '/inc/redux-config.php' );

// Theme options functions
require_once( get_template_directory() . '/inc/mrc-options.php' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'mrchandler_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mrchandler_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mrchandler, use a find and replace
	 * to change 'mrchandler' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mrchandler', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mrchandler' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mrchandler_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // mrchandler_setup
add_action( 'after_setup_theme', 'mrchandler_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mrchandler_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mrchandler' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'mrchandler_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mrchandler_scripts() {
	wp_enqueue_style( 'mrchandler-styles', get_template_directory_uri()  . '/css/bootstrap.min.css', array(), '3.2.0', 'all');
	
	 wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.2.0', 'all' );
 
	wp_enqueue_style( 'mrchandler-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'respond-js', get_template_directory_uri() . '/js/respond.min.js', array(), '1.4.2', true );

	wp_enqueue_script( 'mrchandler-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.2.0', true );

	wp_enqueue_script( 'mrchandler-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '2.0.1', true );

	wp_enqueue_script( 'mrchandler-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '3.1.8', true );

	wp_enqueue_script( 'mrchandler-js', get_template_directory_uri() . '/js/main.js', array(), '3.2.0', true );

	wp_enqueue_script( 'mrchandler-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mrchandler_scripts' );

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
 * Load Bootstrap Menu.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Theme Options - Custom CSS.
 */
require get_template_directory() . '/inc/custom-css.php';

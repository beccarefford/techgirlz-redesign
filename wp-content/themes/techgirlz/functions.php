<?php
/**
 * techgirlz functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package techgirlz
 */

if ( ! function_exists( 'techgirlz_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function techgirlz_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on techgirlz, use a find and replace
	 * to change 'techgirlz' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'techgirlz', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'techgirlz' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'techgirlz_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // techgirlz_setup
add_action( 'after_setup_theme', 'techgirlz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function techgirlz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'techgirlz_content_width', 640 );
}
add_action( 'after_setup_theme', 'techgirlz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function techgirlz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'techgirlz' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'techgirlz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function techgirlz_scripts() {
	wp_enqueue_style( 'techgirlz-style', get_stylesheet_uri() );

	wp_enqueue_script( 'techgirlz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'techgirlz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );

	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );

	wp_enqueue_script( 'bootstrap-js' );

	wp_enqueue_style( 'bootstrap-css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'techgirlz_scripts' );

remove_filter('the_content', 'wpautop');

function prefix_enqueue_awesome() {

	wp_enqueue_style( 'prefix-font-awesome', '/wp-content/themes/font-awesome-4.5.0/css/font-awesome.min.css', array(), '4.0.3' );

}

add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


function wpse_custom_excerpts($content, $limit, $permalink) {
    return wp_trim_words($content, $limit, '&hellip;' );
}


function myButton($atts, $content = ''){

    extract(shortcode_atts(array(
        'text' => '',
        'link' => ''
    ), $atts));

    $html = '<a href="' . $link . '"><div class="myButton">' . $text . '</div></a>';
    return $html;
}

add_shortcode('mybutton', 'myButton');

require_once('wp_bootstrap_navwalker.php');

function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

?>

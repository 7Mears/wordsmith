<?php
/**
 * Wordsmith functions and definitions
 *
 * @package Wordsmith
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'wordsmith_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wordsmith_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wordsmith, use a find and replace
	 * to change 'wordsmith' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wordsmith', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wordsmith' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wordsmith_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // wordsmith_setup
add_action( 'after_setup_theme', 'wordsmith_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wordsmith_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wordsmith' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

//Front-Page Top
	register_sidebar( array(
		'name'          => __( 'Front-Page Top', 'wordsmith' ),
		'id'            => 'frontpagetop',
		'description'   => 'This section is displayed at the top of the front page.',
		'before_widget' => '<div class="frontpageTop widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		) );

//Front-Page Middle
register_sidebar( array(
	'name'          => __( 'Front-Page Middle', 'wordsmith' ),
	'id'            => 'frontpagemiddle',
	'description'   => 'This section is displayed at the middle of the front page.',
	'before_widget' => '<div class="frontpageMiddle widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h5>',
	'after_title'   => '</h5>',
	) );

//Footer
	register_sidebar( array(
		'name'          => __( 'Footer', 'wordsmith' ),
		'id'            => 'footer',
		'description'   => 'This section is displayed at the bottom of every page and post.',
		'before_widget' => '<div id="%1$s" class="footer-section %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );

}
add_action( 'widgets_init', 'wordsmith_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function wordsmith_scripts() {
	wp_enqueue_style( 'wordsmith-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wordsmith-navigation', get_template_directory_uri() . '/js/nav.js', array('jquery'), true );

	wp_enqueue_script( 'wordsmith-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordsmith_scripts' );

/**
* Fonts!
*/
function load_fonts() {
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Exo');
	wp_enqueue_style( 'googleFonts');
}
add_action('wp_print_styles', 'load_fonts');

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



// Changing excerpt more link

function new_excerpt_more($more) {
	return ' ... ' . '<a href="'. get_permalink($post->ID) . '" class="more-link">Read more</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');



/**
* Cleaning up wp_nav_menu
*/

//Deletes all CSS classes and id's, except for those listed in the array below
function custom_wp_nav_menu($var) {
	return is_array($var) ? array_intersect($var, array(
		//List of allowed menu classes
		'current_page_item',
		'current_page_parent',
		'current_page_ancestor',
		'first',
		'last',
		'vertical',
		'horizontal'
	)
	) : '';
}

add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" with "active"
function current_to_active($text){
	$replace = array(
		//List of menu item classes that should be changed to "active"
		'current_page_item' => 'active',
		'current_page_parent' => 'active',
		'current_page_ancestor' => 'active',
	);
	$text = str_replace(array_keys($replace), $replace, $text);
	return $text;
}
add_filter ('wp_nav_menu','current_to_active');

//Deletes empty classes and removes the sub menu class
function strip_empty_classes($menu) {
	$menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
	return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');



// Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links_extra', 3 );

// Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'feed_links', 2 );

// Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'rsd_link' );

// Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'wlwmanifest_link' );

// index link
remove_action( 'wp_head', 'index_rel_link' );

// prev link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

// start link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

// Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

// Display the XHTML generator that is generated on the wp_head hook, WP ver
remove_action( 'wp_head', 'wp_generator' );

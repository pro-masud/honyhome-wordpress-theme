<?php
/**
 * honeyHome functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package honeyHome
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function honeyhome_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on honeyHome, use a find and replace
		* to change 'honeyhome' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'honeyhome', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'honeyhome' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'honeyhome_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);



		register_nav_menus([

			'main_menu'				=> 'Top Menu',
			'footer_menu'			=> 'Footer Menu'

		]);



		register_post_type('honeyhome_slider',[
			'public'			=> true,
			'labels'			=> [
				'name'			=> 'Our Slider',
				'all_items'		=> 'All Slider',
				'add_new'		=> 'Add New Slider',
				'add_new_item'	=> 'Add New Slider',
				'set_featured_image'	=> 'Set Slider Image',
				'remove_featured_image'	=> 'Remove Slider Image'

			],

			'supports'			=> ['thumbnail','title','editor'],


		]);

		register_post_type('honeyhome_project',[
			'public'			=> true,
			'labels'			=> [
				'name'			=> 'Project',
				'all_items'		=> 'All Project',
				'add_new'		=> 'Add New Project',
				'add_new_item'	=> 'Add New Project',

			],

			'supports'			=> ['','','']

		]);

		register_taxonomy('honeyhome_text','honeyhome_project',[
			'public'				=> true,
			'labels'				=> [
				'name'				=> 'Project Category',


			],
			'hierarchical'			=> true,



		]);

}
add_action( 'after_setup_theme', 'honeyhome_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function honeyhome_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'honeyhome_content_width', 640 );
}
add_action( 'after_setup_theme', 'honeyhome_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function honeyhome_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'honeyhome' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'honeyhome' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'honeyhome_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function honeyhome_scripts() {







    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/acess/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/acess/css/bootstrap.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/acess/css/animate.css');
    wp_enqueue_style( 'style-css', get_template_directory_uri().'/acess/css/style.css');
	wp_enqueue_style( 'honeyhome-style', get_stylesheet_uri());



    wp_enqueue_script('jQuery');
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/acess/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap.carousel', get_template_directory_uri() . '/acess/js/bootstrap-carousel.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/acess/js/jquery.easing.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/acess/js/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/acess/js/isotope.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/acess/js/nivo-lightbox.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/acess/js/imagesloaded.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/acess/js/model.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'model', get_template_directory_uri() . '/acess/js/custom.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'honey-map', 'https://maps.google.com/maps/api/js?key=AIzaSyBh-jcDBT5zH9XN1IPjwDP9143Z5BAgnZw' );


	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'honeyhome_scripts' );


// CMB2 Box link hear now

include"libs/opt/redux-core/framework.php";
include"libs/opt/sample/config.php";


// CMB2 Box link hear now

include_once"libs/cmb2/init.php";
include_once"libs/cmb2/config.php";

// TGM Box link hear now


include_once"libs/tgm/example.php";


// add honeyhome title section bar complte link hear now

include_once"libs/shortcode/honeyhome_title_section.php";
include_once"libs/shortcode/honeyhome_services_section.php";
include_once"libs/shortcode/honeyhome_about_section.php";
include_once"libs/shortcode/honeyhome_slider_section.php";
include_once"libs/shortcode/honeyhome_contcet_section.php";
include_once"libs/shortcode/honeyhome_widget_section.php";
include_once"libs/shortcode/honeyhome_project_section.php";







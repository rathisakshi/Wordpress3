<?php
/**
 * Luxury Interior functions and definitions
 *
 * @package Luxury Interior
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'luxury_interior_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function luxury_interior_setup() {
	global $luxury_interior_content_width;
	if ( ! isset( $luxury_interior_content_width ) )
		$luxury_interior_content_width = 680;

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles');
	add_theme_support( 'custom-header', array(
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'luxury-interior' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_editor_style( 'editor-style.css' );
}
endif; // luxury_interior_setup
add_action( 'after_setup_theme', 'luxury_interior_setup' );

function luxury_interior_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'luxury-interior' ),
		'description'   => __( 'Appears on blog page sidebar', 'luxury-interior' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'luxury-interior' ),
		'description'   => __( 'Appears on footer', 'luxury-interior' ),
		'id'            => 'footer-nav',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'luxury_interior_widgets_init' );

function luxury_interior_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri()."/css/bootstrap.css" );
	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri()."/css/owl.carousel.css" );
	wp_enqueue_style( 'luxury-interior-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'luxury-interior-responsive', get_template_directory_uri()."/css/responsive.css" );
	wp_enqueue_style( 'luxury-interior-default', get_template_directory_uri()."/css/default.css" );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/js/owl.carousel.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(). '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'luxury-interior-theme', get_template_directory_uri() . '/js/theme.js' );
	wp_enqueue_script( 'jquery.superfish', get_template_directory_uri() . '/js/jquery.superfish.js' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri()."/css/fontawesome-all.css" );
	wp_enqueue_style( 'luxury-interior-block-style',  get_template_directory_uri(). '/css/blocks.css' );
	wp_enqueue_style('luxury-interior-style', get_stylesheet_uri(), array() );
		wp_style_add_data('luxury-interior-style', 'rtl', 'replace');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	require get_parent_theme_file_path( '/inc/color-scheme/custom-color-control.php' );
	wp_add_inline_style( 'luxury-interior-basic-style',$luxury_interior_color_scheme_css );

	wp_enqueue_style( 'luxury-interior-Open', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');

	$luxury_interior_headings_font = esc_html(get_theme_mod('luxury_interior_headings_fonts'));
	$luxury_interior_body_font = esc_html(get_theme_mod('luxury_interior_body_fonts'));

	if( $luxury_interior_headings_font ) {
		wp_enqueue_style( 'luxury-interior-headings-fonts', '//fonts.googleapis.com/css?family='. $luxury_interior_headings_font );
	} else {
		wp_enqueue_style( 'luxury-interior-emilys', '//fonts.googleapis.com/css2?family=Merienda+One');
	}
	if( $luxury_interior_body_font ) {
		wp_enqueue_style( 'luxury-interior-poppins', '//fonts.googleapis.com/css?family='. $luxury_interior_body_font );
	} else {
		wp_enqueue_style( 'luxury-interior-source-body', '//fonts.googleapis.com/css2?family=Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
	}
}
add_action( 'wp_enqueue_scripts', 'luxury_interior_scripts' );

// Footer Link
define('LUXURY_INTERIOR_FOOTER_LINK',__('https://theclassictemplates.com/themes/free-interior-design-wordpress-theme/','luxury-interior'));

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/inc/gfonts.php';

/**
 * Theme Info Page.
 */
require get_template_directory() . '/inc/addon.php';

/**
 * PRO Button Link
 */
load_template( trailingslashit( get_template_directory() ) . 'inc/button-link/class-button-link.php' );

/**
 * Webfont-Loader.
 */
require get_template_directory() . '/inc/wptt-webfont-loader.php';

if ( ! function_exists( 'luxury_interior_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function luxury_interior_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

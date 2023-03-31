<?php
/**
 * Classic Interior functions and definitions
 *
 * @package Classic Interior
 */

if ( ! function_exists( 'classic_interior_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function classic_interior_setup() {
	global $classic_interior_content_width;
	if ( ! isset( $classic_interior_content_width ) )
		$classic_interior_content_width = 680;

	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles');
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
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
add_action( 'after_setup_theme', 'classic_interior_setup' );

function classic_interior_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'classic-interior' ),
		'description'   => __( 'Appears on blog page sidebar', 'classic-interior' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'classic-interior' ),
		'description'   => __( 'Appears on footer', 'classic-interior' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-1 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'classic-interior' ),
		'description'   => __( 'Appears on footer', 'classic-interior' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-2 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'classic-interior' ),
		'description'   => __( 'Appears on footer', 'classic-interior' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'classic-interior' ),
		'description'   => __( 'Appears on footer', 'classic-interior' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'classic_interior_widgets_init' );

add_action( 'wp_enqueue_scripts', 'classic_interior_enqueue_styles' );
function classic_interior_enqueue_styles() {
    $parenthandle = 'classic-interior-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'classic-interior-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

function classic_interior_scripts() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'classic_interior_scripts' );

add_action( 'customize_register', 'classic_interior_customize_register', 11 );
function classic_interior_customize_register() {
	global $wp_customize;
	$wp_customize->remove_control( 'luxury_interior_sitetitle_color' );
	$wp_customize->remove_control( 'luxury_interior_sitetagline_color' );
	$wp_customize->remove_control( 'luxury_interior_bg_color' );
	$wp_customize->remove_control( 'luxury_interior_emailicon_color' );
	$wp_customize->remove_control( 'luxury_interior_emailtext_color' );
	$wp_customize->remove_control( 'luxury_interior_facebook_color' );
	$wp_customize->remove_control( 'luxury_interior_twitter_color' );
	$wp_customize->remove_control( 'luxury_interior_linkedin_color' );
	$wp_customize->remove_control( 'luxury_interior_instagram_color' );
	$wp_customize->remove_control( 'luxury_interior_youtube_link' );
	$wp_customize->remove_control( 'luxury_interior_youtube_color' );
	$wp_customize->remove_control( 'luxury_interior_youtube_color' );
	$wp_customize->remove_control( 'luxury_interior_menu_color' );
	$wp_customize->remove_control( 'luxury_interior_actmenuhrv_color' );
	$wp_customize->remove_control( 'luxury_interior_submenu_color' );
	$wp_customize->remove_control( 'luxury_interior_submenubg_color' );
	$wp_customize->remove_control( 'luxury_interior_submenuhover_color' );
	$wp_customize->remove_control( 'luxury_interior_submenuhvrbg_color' );
	$wp_customize->remove_control( 'luxury_interior_actmenuhrv_color' );
	$wp_customize->remove_control( 'luxury_interior_actmenuhrv_color' );

	$wp_customize->remove_control( 'luxury_interior_button_text' );
	$wp_customize->remove_control( 'luxury_interior_slider_curve_color' );
	$wp_customize->remove_control( 'luxury_interior_slider_title_color' );
	$wp_customize->remove_control( 'luxury_interior_slider_buttontext_color' );
	$wp_customize->remove_control( 'luxury_interior_slider_button_color' );
	$wp_customize->remove_control( 'luxury_interior_slider_buttonhrv_color' );
	$wp_customize->remove_control( 'luxury_interior_slider_arrow_color' );

	$wp_customize->remove_control( 'luxury_interior_headingtext1' );
	$wp_customize->remove_control( 'luxury_interior_headingtext2' );
	$wp_customize->remove_control( 'luxury_interior_headingtext_para' );
	$wp_customize->remove_control( 'luxury_interior_service_heading1_color' );
	$wp_customize->remove_control( 'luxury_interior_service_heading2_color' );
	$wp_customize->remove_control( 'luxury_interior_service_headingcontent_color' );
	$wp_customize->remove_control( 'luxury_interior_service_border1_color' );
	$wp_customize->remove_control( 'luxury_interior_service_border2_color' );
	$wp_customize->remove_control( 'luxury_interior_service_title_color' );
	$wp_customize->remove_control( 'luxury_interior_service_description_color' );
	$wp_customize->remove_control( 'luxury_interior_service_buttontext_color' );
	$wp_customize->remove_control( 'luxury_interior_service_buttontexthover_color' );
	$wp_customize->remove_control( 'luxury_interior_service_button_color' );
	$wp_customize->remove_control( 'luxury_interior_service_buttonhover_color' );

	$wp_customize->remove_control( 'luxury_interior_footerbg_color' );
	$wp_customize->remove_control( 'luxury_interior_copyright_line' );
	$wp_customize->remove_control( 'luxury_interior_footer_copyright_color' );
	$wp_customize->remove_control( 'luxury_interior_footer_copyrightbg_color' );
	$wp_customize->remove_control( 'luxury_interior_footer_copyrighthrv_color' );
	$wp_customize->remove_control( 'luxury_interior_footer_heading_color' );
	$wp_customize->remove_control( 'luxury_interior_footer_border_color' );
	$wp_customize->remove_control( 'luxury_interior_footer_list_color' );
	$wp_customize->remove_control( 'luxury_interior_footer_listhover_color' );
	$wp_customize->remove_control( 'luxury_interior_footer_text_color' );

}

// Customizer Section
function classic_interior_customizer ( $wp_customize ) {


	$wp_customize->add_setting('classic_interior_headercontactlink',array(
		'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'classic_interior_headercontactlink', array(
	   'section' 	=> 'luxury_interior_header_section',
	   'label'	 	=> __('Contactus Link','classic-interior'),
	   'type'    	=> 'text',
		'setting'	=> 'classic_interior_headercontactlink',
	   'priority' 	=> 1,
    ));

	$wp_customize->add_setting('classic_interior_copyright_linetext',array(
		'default' => 'Classic Interior WordPress Theme',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'classic_interior_copyright_linetext', array(
	   'section' 	=> 'luxury_interior_footer',
	   'label'	 	=> __('Copyright','classic-interior'),
	   'type'    	=> 'text',
		'setting'	=> 'classic_interior_copyright_linetext',
	   'priority' 	=> 1,
    ));

	$wp_customize->add_setting('classic_interior_copyright_link',array(
		'default' => 'https://www.theclassictemplates.com/themes/free-wordpress-woocommerce-template/',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'classic_interior_copyright_link', array(
	   'section' 	=> 'luxury_interior_footer',
	   'label'	 	=> __('Copyright Link','classic-interior'),
	   'type'    	=> 'text',
		'setting'	=> 'classic_interior_copyright_link',
	   'priority' 	=> 2,
    ));

    $wp_customize->add_setting('classic_interior_service_spanheading',array(
		'default' => 'Our',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'classic_interior_service_spanheading', array(
	   'section' 	=> 'luxury_interior_below_slider_section',
	   'label'	 	=> __('Span Heading','classic-interior'),
	   'type'    	=> 'text',
		'setting'	=> 'classic_interior_service_spanheading',
	   'priority' 	=> 2,
    ));

    $wp_customize->add_setting('classic_interior_service_heading',array(
		'default' => 'Services',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'classic_interior_service_heading', array(
	   'section' 	=> 'luxury_interior_below_slider_section',
	   'label'	 	=> __('Heading','classic-interior'),
	   'type'    	=> 'text',
		'setting'	=> 'classic_interior_service_heading',
	   'priority' 	=> 3,
    ));
}
add_action( 'customize_register', 'classic_interior_customizer' );


// Footer Link
define('CLASSIC_INTERIOR_FOOTER_LINK',__('https://www.theclassictemplates.com/','classic-interior'));

if ( ! defined( 'LUXURY_INTERIOR_SUPPORT' ) ) {
define('LUXURY_INTERIOR_SUPPORT',__('https://wordpress.org/support/theme/classic-interior','classic-interior'));
}
if ( ! defined( 'LUXURY_INTERIOR_REVIEW' ) ) {
define('LUXURY_INTERIOR_REVIEW',__('https://wordpress.org/support/theme/classic-interior/reviews/#new-post','classic-interior'));
}
if ( ! defined( 'LUXURY_INTERIOR_PRO_DEMO' ) ) {
define('LUXURY_INTERIOR_PRO_DEMO',__('https://www.theclassictemplates.com/demo/luxury-interior/','classic-interior'));
}
if ( ! defined( 'LUXURY_INTERIOR_THEME_PAGE' ) ) {
define('LUXURY_INTERIOR_THEME_PAGE',__('https://www.theclassictemplates.com/themes/','classic-interior'));
}
if ( ! defined( 'LUXURY_INTERIOR_PREMIUM_PAGE' ) ) {
define('LUXURY_INTERIOR_PREMIUM_PAGE',__('https://www.theclassictemplates.com/wp-themes/interior-design-wordpress-theme/','classic-interior'));
}

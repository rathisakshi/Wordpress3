<?php
/**
 * Luxury Interior Theme Customizer
 *
 * @package Luxury Interior
 */

get_template_part('/inc/select/category-dropdown-custom-control');

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function luxury_interior_customize_register( $wp_customize ) {

	function luxury_interior_sanitize_phone_number( $phone ) {
		return preg_replace( '/[^\d+]/', '', $phone );
	}

	function luxury_interior_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->add_setting('luxury_interior_title_enable',array(
		'default' => true,
		'sanitize_callback' => 'luxury_interior_sanitize_checkbox',
	));
	$wp_customize->add_control( 'luxury_interior_title_enable', array(
	   'settings' => 'luxury_interior_title_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Title','luxury-interior'),
	   'type'      => 'checkbox'
	));

	// site title color
	$wp_customize->add_setting('luxury_interior_sitetitle_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_sitetitle_color', array(
	   'settings' => 'luxury_interior_sitetitle_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Title Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	$wp_customize->add_setting('luxury_interior_tagline_enable',array(
		'default' => false,
		'sanitize_callback' => 'luxury_interior_sanitize_checkbox',
	));
	$wp_customize->add_control( 'luxury_interior_tagline_enable', array(
	   'settings' => 'luxury_interior_tagline_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Tagline','luxury-interior'),
	   'type'      => 'checkbox'
	));

	// site tagline color
	$wp_customize->add_setting('luxury_interior_sitetagline_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_sitetagline_color', array(
	   'settings' => 'luxury_interior_sitetagline_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Tagline Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	//Theme Options
	$wp_customize->add_panel( 'luxury_interior_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'luxury-interior' ),
	) );

	// Header Section
	$wp_customize->add_section('luxury_interior_header_section', array(
        'title' => __('Header Section', 'luxury-interior'),
        'priority' => null,
		'panel' => 'luxury_interior_panel_area',
 	));


 	// bg color
	$wp_customize->add_setting('luxury_interior_bg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_bg_color', array(
	   'settings' => 'luxury_interior_bg_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('BG Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	$wp_customize->add_setting('luxury_interior_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_email_address', array(
	   'settings' => 'luxury_interior_email_address',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Add Email Address', 'luxury-interior'),
	   'type'      => 'text'
	));

	// email icon color
	$wp_customize->add_setting('luxury_interior_emailicon_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_emailicon_color', array(
	   'settings' => 'luxury_interior_emailicon_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Email Icon Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// email text color
	$wp_customize->add_setting('luxury_interior_emailtext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_emailtext_color', array(
	   'settings' => 'luxury_interior_emailtext_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Email Text Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	$wp_customize->add_setting('luxury_interior_fb_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_fb_link', array(
	   'settings' => 'luxury_interior_fb_link',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Facebook Link', 'luxury-interior'),
	   'type'      => 'url'
	));


	// Facebook color
	$wp_customize->add_setting('luxury_interior_facebook_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_facebook_color', array(
	   'settings' => 'luxury_interior_facebook_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Facebook Color', 'luxury-interior'),
	   'type'      => 'color'
	));



	$wp_customize->add_setting('luxury_interior_twitt_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_twitt_link', array(
	   'settings' => 'luxury_interior_twitt_link',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Twitter Link', 'luxury-interior'),
	   'type'      => 'url'
	));


	// twitter color
	$wp_customize->add_setting('luxury_interior_twitter_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_twitter_color', array(
	   'settings' => 'luxury_interior_twitter_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Twitter Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	$wp_customize->add_setting('luxury_interior_linked_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_linked_link', array(
	   'settings' => 'luxury_interior_linked_link',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Linkdin Link', 'luxury-interior'),
	   'type'      => 'url'
	));

	// linkedin color
	$wp_customize->add_setting('luxury_interior_linkedin_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_linkedin_color', array(
	   'settings' => 'luxury_interior_linkedin_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Linkedin Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('luxury_interior_insta_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_insta_link', array(
	   'settings' => 'luxury_interior_insta_link',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Instagram Link', 'luxury-interior'),
	   'type'      => 'url'
	));

	// instagram color
	$wp_customize->add_setting('luxury_interior_instagram_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_instagram_color', array(
	   'settings' => 'luxury_interior_instagram_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Instagram Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	$wp_customize->add_setting('luxury_interior_youtube_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_youtube_link', array(
	   'settings' => 'luxury_interior_youtube_link',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Youtube Link', 'luxury-interior'),
	   'type'      => 'url'
	));


	// youtube color
	$wp_customize->add_setting('luxury_interior_youtube_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_youtube_color', array(
	   'settings' => 'luxury_interior_youtube_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Youtube Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// menu color
	$wp_customize->add_setting('luxury_interior_menu_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_menu_color', array(
	   'settings' => 'luxury_interior_menu_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Menu Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// actmenuhrv color
	$wp_customize->add_setting('luxury_interior_actmenuhrv_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_actmenuhrv_color', array(
	   'settings' => 'luxury_interior_actmenuhrv_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Active Menu & Hover Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// submenu color
	$wp_customize->add_setting('luxury_interior_submenu_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_submenu_color', array(
	   'settings' => 'luxury_interior_submenu_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Sub Menu Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// submenubg color
	$wp_customize->add_setting('luxury_interior_submenubg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_submenubg_color', array(
	   'settings' => 'luxury_interior_submenubg_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('Sub Menu BG Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// submenuhover color
	$wp_customize->add_setting('luxury_interior_submenuhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_submenuhover_color', array(
	   'settings' => 'luxury_interior_submenuhover_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('SubMenu Hover Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// submenuhvrbg color
	$wp_customize->add_setting('luxury_interior_submenuhvrbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_submenuhvrbg_color', array(
	   'settings' => 'luxury_interior_submenuhvrbg_color',
	   'section'   => 'luxury_interior_header_section',
	   'label' => __('SubMenu Hover BG Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// Home Category Dropdown Section
	$wp_customize->add_section('luxury_interior_one_cols_section',array(
		'title'	=> __('Slider','luxury-interior'),
		'description'	=> __('Select Category from the Dropdowns for slider, Also use the given image dimension (1600 x 850).','luxury-interior'),
		'priority'	=> null,
		'panel' => 'luxury_interior_panel_area'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'luxury_interior_slidersection', array(
		'default'	=> '0',
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new luxury_interior_Category_Dropdown_Custom_Control( $wp_customize, 'luxury_interior_slidersection', array(
		'section' => 'luxury_interior_one_cols_section',
		'settings'   => 'luxury_interior_slidersection',
	) ) );

	//Hide Section
	$wp_customize->add_setting('luxury_interior_hide_categorysec',array(
		'default' => false,
		'sanitize_callback' => 'luxury_interior_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_hide_categorysec', array(
	   'settings' => 'luxury_interior_hide_categorysec',
	   'section'   => 'luxury_interior_one_cols_section',
	   'label'     => __('Check To Enable This Section','luxury-interior'),
	   'type'      => 'checkbox'
	));


	$wp_customize->add_setting('luxury_interior_button_text',array(
		'default' => 'Hire Me',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_button_text', array(
	   'settings' => 'luxury_interior_button_text',
	   'section'   => 'luxury_interior_one_cols_section',
	   'label' => __('Add Button Text', 'luxury-interior'),
	   'type'      => 'text'
	));


	// slider curve color
	$wp_customize->add_setting('luxury_interior_slider_curve_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_slider_curve_color', array(
	   'settings' => 'luxury_interior_slider_curve_color',
	   'section'   => 'luxury_interior_one_cols_section',
	   'label' => __('Curve Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// slider title color
	$wp_customize->add_setting('luxury_interior_slider_title_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_slider_title_color', array(
	   'settings' => 'luxury_interior_slider_title_color',
	   'section'   => 'luxury_interior_one_cols_section',
	   'label' => __('Title Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// slider buttontext color
	$wp_customize->add_setting('luxury_interior_slider_buttontext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_slider_buttontext_color', array(
	   'settings' => 'luxury_interior_slider_buttontext_color',
	   'section'   => 'luxury_interior_one_cols_section',
	   'label' => __('Button Text Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// slider button color
	$wp_customize->add_setting('luxury_interior_slider_button_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_slider_button_color', array(
	   'settings' => 'luxury_interior_slider_button_color',
	   'section'   => 'luxury_interior_one_cols_section',
	   'label' => __('Button Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// slider buttonhrv color
	$wp_customize->add_setting('luxury_interior_slider_buttonhrv_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_slider_buttonhrv_color', array(
	   'settings' => 'luxury_interior_slider_buttonhrv_color',
	   'section'   => 'luxury_interior_one_cols_section',
	   'label' => __('Button Hover Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// slider arrow color
	$wp_customize->add_setting('luxury_interior_slider_arrow_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_slider_arrow_color', array(
	   'settings' => 'luxury_interior_slider_arrow_color',
	   'section'   => 'luxury_interior_one_cols_section',
	   'label' => __('Arrow Color', 'luxury-interior'),
	   'type'      => 'color'
	));



	// Services Section
	$wp_customize->add_section('luxury_interior_below_slider_section', array(
		'title'	=> __('Services Section','luxury-interior'),
		'description'	=> __('Select Pages from the dropdown for Services.','luxury-interior'),
		'priority'	=> null,
		'panel' => 'luxury_interior_panel_area',
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'luxury_interior_services_cat', array(
		'default'	=> '0',
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new luxury_interior_Category_Dropdown_Custom_Control( $wp_customize, 'luxury_interior_services_cat', array(
		'section' => 'luxury_interior_below_slider_section',
		'settings'   => 'luxury_interior_services_cat',
	) ) );

	$wp_customize->add_setting('luxury_interior_disabled_pgboxes',array(
		'default' => false,
		'sanitize_callback' => 'luxury_interior_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_disabled_pgboxes', array(
	   'settings' => 'luxury_interior_disabled_pgboxes',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label'     => __('Check To Enable This Section','luxury-interior'),
	   'type'      => 'checkbox'
	));


	$wp_customize->add_setting('luxury_interior_headingtext1',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_headingtext1', array(
	   'settings' => 'luxury_interior_headingtext1',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Add Heading 1', 'luxury-interior'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('luxury_interior_headingtext2',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_headingtext2', array(
	   'settings' => 'luxury_interior_headingtext2',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Add Heading 2', 'luxury-interior'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('luxury_interior_headingtext_para',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'luxury_interior_headingtext_para', array(
	   'settings' => 'luxury_interior_headingtext_para',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Add Heading Content', 'luxury-interior'),
	   'type'      => 'text'
	));


	// heading 1 color
	$wp_customize->add_setting('luxury_interior_service_heading1_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_heading1_color', array(
	   'settings' => 'luxury_interior_service_heading1_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Heading 1 Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// heading 2 color
	$wp_customize->add_setting('luxury_interior_service_heading2_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_heading2_color', array(
	   'settings' => 'luxury_interior_service_heading2_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Heading 2 Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// heading content color
	$wp_customize->add_setting('luxury_interior_service_headingcontent_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_headingcontent_color', array(
	   'settings' => 'luxury_interior_service_headingcontent_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Content Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// service border 1 color
	$wp_customize->add_setting('luxury_interior_service_border1_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_border1_color', array(
	   'settings' => 'luxury_interior_service_border1_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Border 1 Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// service border 2 color
	$wp_customize->add_setting('luxury_interior_service_border2_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_border2_color', array(
	   'settings' => 'luxury_interior_service_border2_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Border 2 Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// service title color
	$wp_customize->add_setting('luxury_interior_service_title_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_title_color', array(
	   'settings' => 'luxury_interior_service_title_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Title Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// service description color
	$wp_customize->add_setting('luxury_interior_service_description_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_description_color', array(
	   'settings' => 'luxury_interior_service_description_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Description Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// service buttontext color
	$wp_customize->add_setting('luxury_interior_service_buttontext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_buttontext_color', array(
	   'settings' => 'luxury_interior_service_buttontext_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Button Text Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// service buttontexthover color
	$wp_customize->add_setting('luxury_interior_service_buttontexthover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_buttontexthover_color', array(
	   'settings' => 'luxury_interior_service_buttontexthover_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Button Text Hover Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// service button color
	$wp_customize->add_setting('luxury_interior_service_button_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_button_color', array(
	   'settings' => 'luxury_interior_service_button_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Button Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// service buttonhover color
	$wp_customize->add_setting('luxury_interior_service_buttonhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_service_buttonhover_color', array(
	   'settings' => 'luxury_interior_service_buttonhover_color',
	   'section'   => 'luxury_interior_below_slider_section',
	   'label' => __('Button Hover Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// Footer Section
	$wp_customize->add_section('luxury_interior_footer', array(
		'title'	=> __('Footer Section','luxury-interior'),
		'priority'	=> null,
		'panel' => 'luxury_interior_panel_area',
	));


	// FOOTER BG COLOR
	$wp_customize->add_setting('luxury_interior_footerbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footerbg_color', array(
	   'settings' => 'luxury_interior_footerbg_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('BG Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	$wp_customize->add_setting('luxury_interior_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'luxury_interior_copyright_line', array(
	   'section' 	=> 'luxury_interior_footer',
	   'label'	 	=> __('Copyright Line','luxury-interior'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));



    // FOOTER copyright COLOR
	$wp_customize->add_setting('luxury_interior_footer_copyright_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footer_copyright_color', array(
	   'settings' => 'luxury_interior_footer_copyright_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('Copyright Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// FOOTER copyrightbg COLOR
	$wp_customize->add_setting('luxury_interior_footer_copyrightbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footer_copyrightbg_color', array(
	   'settings' => 'luxury_interior_footer_copyrightbg_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('Copyright BG Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// FOOTER copyrighthrv COLOR
	$wp_customize->add_setting('luxury_interior_footer_copyrighthrv_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footer_copyrighthrv_color', array(
	   'settings' => 'luxury_interior_footer_copyrighthrv_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('Copyright Hover Color', 'luxury-interior'),
	   'type'      => 'color'
	));



	// FOOTER heading COLOR
	$wp_customize->add_setting('luxury_interior_footer_heading_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footer_heading_color', array(
	   'settings' => 'luxury_interior_footer_heading_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('Heading Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// FOOTER border COLOR
	$wp_customize->add_setting('luxury_interior_footer_border_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footer_border_color', array(
	   'settings' => 'luxury_interior_footer_border_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('Border Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// FOOTER list COLOR
	$wp_customize->add_setting('luxury_interior_footer_list_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footer_list_color', array(
	   'settings' => 'luxury_interior_footer_list_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('List Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	// FOOTER listhover COLOR
	$wp_customize->add_setting('luxury_interior_footer_listhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footer_listhover_color', array(
	   'settings' => 'luxury_interior_footer_listhover_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('Listhover Color', 'luxury-interior'),
	   'type'      => 'color'
	));

	// FOOTER text COLOR
	$wp_customize->add_setting('luxury_interior_footer_text_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'luxury_interior_footer_text_color', array(
	   'settings' => 'luxury_interior_footer_text_color',
	   'section'   => 'luxury_interior_footer',
	   'label' => __('Text Color', 'luxury-interior'),
	   'type'      => 'color'
	));


	//Color
	$wp_customize->add_setting('luxury_interior_color_scheme_one',array(
		'default' => '#fdcf55',
		'sanitize_callback' => 'sanitize_hex_color',
	));
    $wp_customize->add_control(
	    new WP_Customize_Color_Control(
	    $wp_customize,
	    'luxury_interior_color_scheme_one',
	    array(
	        'label'      => __( 'Color Scheme', 'luxury-interior' ),
	        'section'    => 'colors',
	        'settings'   => 'luxury_interior_color_scheme_one',
	    ) )
	);

	// Google Fonts
    $wp_customize->add_section( 'luxury_interior_google_fonts_section', array(
		'title'       => __( 'Google Fonts', 'luxury-interior' ),
		'priority'       => 24,
	) );

	$font_choices = array(
		'Kaushan Script:' => 'Kaushan Script',
		'Emilys Candy:' => 'Emilys Candy',
		'Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' => 'Poppins',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Rokkitt:400' => 'Rokkitt',
	);

	$wp_customize->add_setting( 'luxury_interior_headings_fonts', array(
		'sanitize_callback' => 'luxury_interior_sanitize_fonts',
	));
	$wp_customize->add_control( 'luxury_interior_headings_fonts', array(
		'type' => 'select',
		'description' => __('Select your desired font for the headings.', 'luxury-interior'),
		'section' => 'luxury_interior_google_fonts_section',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'luxury_interior_body_fonts', array(
		'sanitize_callback' => 'luxury_interior_sanitize_fonts'
	));
	$wp_customize->add_control( 'luxury_interior_body_fonts', array(
		'type' => 'select',
		'description' => __( 'Select your desired font for the body.', 'luxury-interior' ),
		'section' => 'luxury_interior_google_fonts_section',
		'choices' => $font_choices
	));
}
add_action( 'customize_register', 'luxury_interior_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function luxury_interior_customize_preview_js() {
	wp_enqueue_script( 'luxury_interior_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'luxury_interior_customize_preview_js' );

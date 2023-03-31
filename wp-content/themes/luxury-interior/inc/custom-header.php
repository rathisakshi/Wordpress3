<?php
/**
 * @package Luxury Interior
 * Setup the WordPress core custom header feature.
 *
 * @uses luxury_interior_header_style()
 */
function luxury_interior_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'luxury_interior_custom_header_args', array(		
		'default-text-color'     => 'fff',
		'width'                  => 2500,
		'height'                 => 280,
		'wp-head-callback'       => 'luxury_interior_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'luxury_interior_custom_header_setup' );

if ( ! function_exists( 'luxury_interior_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see luxury_interior_custom_header_setup().
 */
function luxury_interior_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	



	h1.site-title a {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_sitetitle_color')); ?>;
	}

	span.site-description {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_sitetagline_color')); ?>;
	}





	.upper-header .fa-envelope {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_emailicon_color')); ?>;
	}

	.upper-header p {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_emailtext_color')); ?>;
	}

	.upper-header {
		background: <?php echo esc_attr(get_theme_mod('luxury_interior_bg_color')); ?>;
	}


	.social-icons .fa-facebook-f {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_facebook_color')); ?>;
	}

	.social-icons .fa-twitter {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_twitter_color')); ?>;
	}

	.social-icons .fa-linkedin-in  {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_linkedin_color')); ?>;
	}

	.social-icons .fa-instagram  {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_instagram_color')); ?>;
	}

	.social-icons .fa-youtube {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_youtube_color')); ?>;
	}


	.main-nav a {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_menu_color')); ?>;
	}

	.main-nav a:hover, .current_page_item a {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_actmenuhrv_color')); ?>;
	}

	.main-nav ul ul a {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_submenu_color')); ?>;

	}

	.main-nav ul ul {
		background: <?php echo esc_attr(get_theme_mod('luxury_interior_submenubg_color')); ?>;

	}

	.main-nav ul ul a:hover {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_submenuhover_color')); ?>;

	}

	.main-nav ul ul a:hover {
		background: <?php echo esc_attr(get_theme_mod('luxury_interior_submenuhvrbg_color')); ?>;

	}





	.slider-leftsvg path {
		fill: <?php echo esc_attr(get_theme_mod('luxury_interior_slider_curve_color')); ?>;
	}

	.slider-box h3 {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_slider_title_color')); ?>;
	}

	.slide-btn a {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_slider_buttontext_color')); ?>;
	}

	.slide-btn a {
		background: <?php echo esc_attr(get_theme_mod('luxury_interior_slider_button_color')); ?>;
	}

	.slide-btn a:hover {
		background: <?php echo esc_attr(get_theme_mod('luxury_interior_slider_buttonhrv_color')); ?>;

	}

	#catsliderarea .fa-long-arrow-alt-left, #catsliderarea .fa-long-arrow-alt-right {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_slider_arrow_color')); ?>;
	}









	.heading-box h2 {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_heading1_color')); ?>;
	}

	.heading-box h3 {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_heading2_color')); ?>;
	}

	.heading-box p {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_headingcontent_color')); ?>;
	}


	.service-project-container:before {
		border-left-color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_border1_color')); ?>;
		border-right-color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_border2_color')); ?>;

		

	}

	.service-project-container:after {

		border-top-color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_border1_color')); ?>;
		border-bottom-color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_border2_color')); ?>;


	}




	.services_inner_box h4 a {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_title_color')); ?>;
	}

	.services_inner_box p {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_description_color')); ?>;
	}
	
	a.service-box-button {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_buttontext_color')); ?>;
	}

	a.service-box-button:hover {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_service_buttontexthover_color')); ?>;
	}

	a.service-box-button {
		background: <?php echo esc_attr(get_theme_mod('luxury_interior_service_button_color')); ?>;
	}

	a.service-box-button:hover {
		background: <?php echo esc_attr(get_theme_mod('luxury_interior_service_buttonhover_color')); ?>;
	}





	#footer {
		background-color: <?php echo esc_attr(get_theme_mod('luxury_interior_footerbg_color')); ?>;
	}
	.copywrap a {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_footer_copyright_color')); ?>;
	}
	.copywrap a:hover {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_footer_copyrighthrv_color')); ?>;
	}

	.ftr-4-box h3, .ftr-4-box h2 {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_footer_heading_color')); ?>;

	}

	.ftr-4-box h3, .ftr-4-box h2 {
		border-color: <?php echo esc_attr(get_theme_mod('luxury_interior_footer_border_color')); ?>;
	}

	.ftr-4-box ul li a, .ftr-4-box a {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_footer_list_color')); ?>;
	}

	.ftr-4-box a:hover {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_footer_listhover_color')); ?>;
	}

	.ftr-4-box p {
		color: <?php echo esc_attr(get_theme_mod('luxury_interior_footer_text_color')); ?>;
	}

	.copywrap {
		background-color: <?php echo esc_attr(get_theme_mod('luxury_interior_footer_copyrightbg_color')); ?>;
	}


	</style>

	




	<?php 
}
endif;
<?php
/*
 * @package Luxury Interior
 */

function luxury_interior_admin_enqueue_scripts() {
	wp_enqueue_style( 'luxury-interior-admin-style', esc_url( get_template_directory_uri() ).'/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'luxury_interior_admin_enqueue_scripts' );

add_action('after_switch_theme', 'luxury_interior_options');

function luxury_interior_options () {
	global $pagenow;
	if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
		wp_redirect( admin_url( 'themes.php?page=luxury-interior' ) );
		exit;
	}
}

if ( ! defined( 'LUXURY_INTERIOR_SUPPORT' ) ) {
define('LUXURY_INTERIOR_SUPPORT',__('https://wordpress.org/support/theme/luxury-interior','luxury-interior'));
}
if ( ! defined( 'LUXURY_INTERIOR_REVIEW' ) ) {
define('LUXURY_INTERIOR_REVIEW',__('https://wordpress.org/support/theme/luxury-interior/reviews/#new-post','luxury-interior'));
}
if ( ! defined( 'LUXURY_INTERIOR_PRO_DEMO' ) ) {
define('LUXURY_INTERIOR_PRO_DEMO',__('https://www.theclassictemplates.com/demo/luxury-interior/','luxury-interior'));
}
if ( ! defined( 'LUXURY_INTERIOR_THEME_PAGE' ) ) {
define('LUXURY_INTERIOR_THEME_PAGE',__('https://www.theclassictemplates.com/themes/','luxury-interior'));
}
if ( ! defined( 'LUXURY_INTERIOR_PREMIUM_PAGE' ) ) {
define('LUXURY_INTERIOR_PREMIUM_PAGE',__('https://www.theclassictemplates.com/wp-themes/interior-design-wordpress-theme/','luxury-interior'));
}

function luxury_interior_theme_info_menu_link() {

	$theme = wp_get_theme();
	add_theme_page(
		sprintf( esc_html__( 'Welcome to %1$s %2$s', 'luxury-interior' ), $theme->display( 'Name' ), $theme->display( 'Version' ) ),
		esc_html__( 'Theme Info', 'luxury-interior' ),'edit_theme_options','luxury-interior','luxury_interior_theme_info_page'
	);
}
add_action( 'admin_menu', 'luxury_interior_theme_info_menu_link' );

function luxury_interior_theme_info_page() {

	$theme = wp_get_theme();
	?>
<div class="wrap theme-info-wrap">
	<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'luxury-interior' ), esc_html($theme->display( 'Name', 'luxury-interior'  )),esc_html($theme->display( 'Version', 'luxury-interior' ))); ?>
	</h1>
	<p class="theme-description">
	<?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'luxury-interior' ); ?>
	</p>
	<hr>
	<div class="important-links clearfix">
		<p><strong><?php esc_html_e( 'Theme Links', 'luxury-interior' ); ?>:</strong>
			<a href="<?php echo esc_url( LUXURY_INTERIOR_THEME_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'luxury-interior' ); ?></a>
			<a href="<?php echo esc_url( LUXURY_INTERIOR_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Contact Us', 'luxury-interior' ); ?></a>
			<a href="<?php echo esc_url( LUXURY_INTERIOR_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Rate This Theme', 'luxury-interior' ); ?></a>
			<a href="<?php echo esc_url( LUXURY_INTERIOR_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Premium Demo', 'luxury-interior' ); ?></a>
			<a href="<?php echo esc_url( LUXURY_INTERIOR_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Go To Premium', 'luxury-interior' ); ?></a>
		</p>
	</div>
	<hr>
	<div id="getting-started">
		<h3><?php printf( esc_html__( 'Getting started with %s', 'luxury-interior' ),
		esc_html($theme->display( 'Name', 'luxury-interior' ))); ?></h3>
		<div class="columns-wrapper clearfix">
			<div class="column column-half clearfix">
				<div class="section">
					<h4><?php esc_html_e( 'Theme Description', 'luxury-interior' ); ?></h4>
					<div class="theme-description-1"><?php echo esc_html($theme->display( 'Description' )); ?></div>
				</div>
			</div>
			<div class="column column-half clearfix">
				<img src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="section">
					<h4><?php esc_html_e( 'Theme Options', 'luxury-interior' ); ?></h4>
					<p class="about">
					<?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'luxury-interior' ),esc_html($theme->display( 'Name', 'luxury-interior' ))); ?></p>
					<p>
					<a target="_blank" href="<?php echo esc_url( wp_customize_url() ); ?>" class="button button-primary"><?php esc_html_e( 'Customize Theme', 'luxury-interior' ); ?></a>
					<a href="<?php echo esc_url( LUXURY_INTERIOR_PREMIUM_PAGE ); ?>" target="_blank" class="button button-secondary premium-btn"><?php esc_html_e( 'Checkout Premium', 'luxury-interior' ); ?></a></p>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div id="theme-author">
	  <p><?php
		printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'luxury-interior' ),
			esc_html($theme->display( 'Name', 'luxury-interior' )),
			'<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'luxury-interior' ) . '">classictemplate</a>',
			'<a target="_blank" href="' . esc_url( LUXURY_INTERIOR_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'luxury-interior' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'luxury-interior' ) . '</a>'
		)
		?></p>
	</div>
</div>
<?php
}

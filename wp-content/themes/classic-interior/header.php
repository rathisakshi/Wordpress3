<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Classic Interior
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<?php if ( get_theme_mod('luxury_interior_preloader',true) != "") { ?>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<?php }?>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'classic-interior' ); ?></a>

<div id="pageholder" <?php if( get_theme_mod( 'luxury_interior_box_layout' ) ) { echo 'class="boxlayout"'; } ?>>

<header id="header">
  <div class="row justify-content-between">
    <div class="col-lg-2 col-md-12 col-sm-12 pd-0">
      <div class="logo">
        <?php luxury_interior_the_custom_logo(); ?>
        <div class="site-branding-text">
          <?php if ( get_theme_mod('luxury_interior_title_enable',true) != "") { ?>
          <h1 class="site-title"><a class="text-decoration-none sub-primary-color fs-3" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
          <?php } ?>
          <!-- <p class="ht-site-description"><a href="<//?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>  -->
        </div>
      </div>
    </div>

    <div class="col-lg-10 col-md-12 col-sm-12 pd-0">
      <div class="row top-header align-items-center justify-content-between ">
        <div class="col-lg-5 col-md-12 col-sm-12 tp-txt">
          <?php $luxury_interior_description = get_bloginfo( 'description', 'display' );
            if ( $luxury_interior_description || is_customize_preview() ) : ?>
            <?php if ( get_theme_mod('luxury_interior_tagline_enable',false) != "") { ?>
            <span class="site-description primary-color"><?php echo esc_html( $luxury_interior_description ); ?></span>
          <?php } ?>
          <?php endif; ?>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 tp-txt pd-0">
            <a href="mailto:<?php echo esc_html(get_theme_mod('luxury_interior_email_address',__('info@yourmail.com','classic-interior'))); ?>" class="w-100 align-items-center text-decoration-none">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <p class="contact-string fw-normal mb-0">
                <?php echo esc_html(get_theme_mod('luxury_interior_email_address',__('info@yourmail.com','classic-interior'))); ?>
              </p>
            </a>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 center-align social-icons pd-0">
            <a title="<?php esc_attr('facebook', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_html(get_theme_mod('luxury_interior_fb_link',__('#','classic-interior'))); ?>">
                <i class="fab fa-facebook-f mr-2"></i>
            </a>
            <a title="<?php esc_attr('twitter', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_html(get_theme_mod('luxury_interior_twitt_link',__('#','classic-interior'))); ?>">
                <i class="fab fa-twitter mr-2"></i>
            </a>
            <a title="<?php esc_attr('linkedin', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_html(get_theme_mod('luxury_interior_linked_link',__('#','classic-interior'))); ?>">
                  <i class="fab fa-linkedin-in mr-2"></i>
            </a>
            <a title="<?php esc_attr('instagram', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_html(get_theme_mod('luxury_interior_insta_link',__('#','classic-interior'))); ?>">
                <i class="fab fa-instagram mr-2"></i>
            </a>
        </div>
          <div class="clearfix"></div>
      </div>
       <div class="clearfix"></div>
      <div class="row bottom-header">
        <div class="col-lg-10 col-md-10 col-sm-12">
          <div class="toggle-nav">
          <?php if(has_nav_menu('primary')){ ?>
            <button role="tab"><?php esc_html_e('MENU','classic-interior'); ?></button>
          <?php }?>
          </div>
          <div id="mySidenav" class="nav sidenav">
            <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','classic-interior' ); ?>">
              <?php if(has_nav_menu('primary')){
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu' ,
                  'menu_class' => 'site-menu p-0 mb-0 list-group list-group-horizontal',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) );
              } ?>
              <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','classic-interior'); ?></a>
            </nav>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 pd-0">
            <div class="h-btn">
              <a class="contactus " href="<?php echo esc_html(get_theme_mod('classic_interior_headercontactlink',__('#','classic-interior'))); ?>">
                <?php esc_html_e('contact us','classic-interior'); ?>
              </a>
          </div>
        </div>
         <div class="clearfix"></div>
      </div>
    </div>
  </div>
</header>

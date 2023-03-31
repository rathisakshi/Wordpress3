<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Luxury Interior
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

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'luxury-interior' ); ?></a>

<div class="header">
  <div class="container">
    <div class="upper-header">
      <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-5 center-align">
          <?php $luxury_interior_description = get_bloginfo( 'description', 'display' );
            if ( $luxury_interior_description || is_customize_preview() ) : ?>
            <?php if ( get_theme_mod('luxury_interior_tagline_enable',false) != "") { ?>
            <span class="site-description"><?php echo esc_html( $luxury_interior_description ); ?></span>
            <?php } ?>
          <?php endif; ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 center-align">
            <?php if ( get_theme_mod('luxury_interior_email_address') != "") { ?>
              <p class="mb-0"><i class="far fa-envelope mr-2"></i><?php echo esc_html(get_theme_mod ('luxury_interior_email_address','')); ?></p>
            <?php }?>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-3 center-align social-icons">
          <?php if ( get_theme_mod('luxury_interior_fb_link') != "") { ?>
            <a title="<?php esc_attr('facebook', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('luxury_interior_fb_link')); ?>"><i class="fab fa-facebook-f mr-2"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('luxury_interior_twitt_link') != "") { ?>
            <a title="<?php esc_attr('twitter', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('luxury_interior_twitt_link')); ?>"><i class="fab fa-twitter mr-2"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('luxury_interior_linked_link') != "") { ?>
            <a title="<?php esc_attr('linkedin', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('luxury_interior_linked_link')); ?>"><i class="fab fa-linkedin-in mr-2"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('luxury_interior_insta_link') != "") { ?>
            <a title="<?php esc_attr('instagram', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('luxury_interior_insta_link')); ?>"><i class="fab fa-instagram mr-2"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('luxury_interior_youtube_link') != "") { ?>
            <a title="<?php esc_attr('youtube', 'luxury-interior'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('luxury_interior_youtube_link')); ?>"><i class="fab fa-youtube mr-2"></i></a>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="inner-header">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-8 center-align">
          <div class="logo py-2 py-md-0 py-sm-0">
            <?php luxury_interior_the_custom_logo(); ?>
            <?php $luxury_interior_blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $luxury_interior_blog_info ) ) : ?>
              <?php if ( get_theme_mod('luxury_interior_title_enable',true) != "") { ?>
              <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-9 col-md-3 col-sm-3 col-4 center-align">
          <div class="toggle-nav text-center">
            <?php if(has_nav_menu('primary')){ ?>
              <button role="tab"><?php esc_html_e('MENU','luxury-interior'); ?></button>
            <?php }?>
          </div>
          <div id="mySidenav" class="nav sidenav text-right">
            <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','luxury-interior' ); ?>">
              <?php if(has_nav_menu('primary')){
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu clearfix' ,
                  'menu_class' => 'clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) );
              } ?>
              <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','luxury-interior'); ?></a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

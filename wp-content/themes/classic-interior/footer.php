<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Classic Interior
 */
?>
<div id="footer">
  <div class="f-oly"></div>
	<div class="container">
    <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
    <?php endif; // end footer widget area ?>

    <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
    <?php endif; // end footer widget area ?>

    <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
    <?php endif; // end footer widget area ?>

    <?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>
    <?php endif; // end footer widget area ?>
    <div class="clear"></div>
  </div>
  <div class="copywrap">
  	<div class="container">
      <a href="<?php echo esc_html(get_theme_mod('classic_interior_copyright_link',__('https://www.theclassictemplates.com/themes/classic-interior-design-wordpress-theme/','classic-interior'))); ?>" target="_blank"><?php echo esc_html(get_theme_mod('classic_interior_copyright_linetext',__('Classic Interior WordPress Theme','classic-interior'))); ?></a>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>

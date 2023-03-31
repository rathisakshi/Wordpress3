<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Luxury Interior
 */
?>
<div id="footer">
  <div class="container">
    <div class="ftr-4-box">
      <?php dynamic_sidebar('footer-nav'); ?>
    </div>
  </div>
  <div class="copywrap text-center">


    <div class="container">
      <?php
        $luxury_interior_copyright_text = get_theme_mod( 'luxury_interior_copyright_line' );
        if(!empty($luxury_interior_copyright_text)){
      ?>
        <p><?php echo wp_kses_post($luxury_interior_copyright_text); ?></p>
      <?php
      }else{
          $luxury_interior_url2 =  esc_url('https://www.theclassictemplates.com/');
          $luxury_interior_text =  esc_html__('Copyright &copy; 2022 ','luxury-interior');
          $luxury_interior_text2 =  get_bloginfo('name');
          $luxury_interior_text3 =  ' |';
          $luxury_interior_text4 = $luxury_interior_text.$luxury_interior_text2.$luxury_interior_text3;
          $luxury_interior_text5 =  esc_html__('Classic Templates','luxury-interior');
          printf( '<p>%s Powered by <a href="%s">%s</a></p>', esc_html($luxury_interior_text4), esc_url($luxury_interior_url2), esc_html($luxury_interior_text5) );
      }
      ?>
    </div>

  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>

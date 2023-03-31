<?php 

$luxury_interior_color_scheme_one = get_theme_mod('luxury_interior_color_scheme_one');

$luxury_interior_color_scheme_css = "";

if($luxury_interior_color_scheme_one != false){

  $luxury_interior_color_scheme_css .='.upper-header,
  .slide-btn a,
  a.service-box-button:hover,
  .main-nav ul ul a:hover,
  .woocommerce ul.products li.product .button, 
  .woocommerce #respond input#submit.alt, 
  .woocommerce a.button.alt, 
  .woocommerce button.button.alt, 
  .woocommerce input.button.alt, 
  .woocommerce a.button, 
  .woocommerce button.button, 
  .woocommerce #respond input#submit, 
  #commentform input#submit,
  .toggle-nav button,
  #footer input.search-submit{';

  $luxury_interior_color_scheme_css .='background: '.esc_attr($luxury_interior_color_scheme_one).';';

  $luxury_interior_color_scheme_css .='}';

  $luxury_interior_color_scheme_css .='.toggle-nav button{';

  $luxury_interior_color_scheme_css .='background: '.esc_attr($luxury_interior_color_scheme_one).' !important;';

  $luxury_interior_color_scheme_css .='}';

  $luxury_interior_color_scheme_css .='.service-project-container:after{';

  $luxury_interior_color_scheme_css .='border-bottom-color: '.esc_attr($luxury_interior_color_scheme_one).';';

  $luxury_interior_color_scheme_css .='}';

  $luxury_interior_color_scheme_css .='.service-project-container:before{';

  $luxury_interior_color_scheme_css .='border-right-color: '.esc_attr($luxury_interior_color_scheme_one).';';

  $luxury_interior_color_scheme_css .='}';

  $luxury_interior_color_scheme_css .='.listarticle, 
  #sidebar aside.widget{';

  $luxury_interior_color_scheme_css .='border-color: '.esc_attr($luxury_interior_color_scheme_one).' !important;';

  $luxury_interior_color_scheme_css .='}';

  $luxury_interior_color_scheme_css .='a.service-box-button,
  .ftr-4-box a:hover,
  .main-nav a:hover, 
  .current_page_item a{';

  $luxury_interior_color_scheme_css .='color: '.esc_attr($luxury_interior_color_scheme_one).';';

  $luxury_interior_color_scheme_css .='}';
}
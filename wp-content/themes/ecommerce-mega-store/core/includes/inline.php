<?php


$ecommerce_mega_store_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$ecommerce_mega_store_text_transform = get_theme_mod( 'menu_text_transform_ecommerce_mega_store','UPPERCASE');
    if($ecommerce_mega_store_text_transform == 'CAPITALISE'){

		$ecommerce_mega_store_custom_css .='#main-menu ul li a{';

			$ecommerce_mega_store_custom_css .='text-transform: capitalize ; font-size: 13px;';

		$ecommerce_mega_store_custom_css .='}';

	}else if($ecommerce_mega_store_text_transform == 'UPPERCASE'){

		$ecommerce_mega_store_custom_css .='#main-menu ul li a{';

			$ecommerce_mega_store_custom_css .='text-transform: uppercase ; font-size: 13px;';

		$ecommerce_mega_store_custom_css .='}';

	}else if($ecommerce_mega_store_text_transform == 'LOWERCASE'){

		$ecommerce_mega_store_custom_css .='#main-menu ul li a{';

			$ecommerce_mega_store_custom_css .='text-transform: lowercase ; font-size: 13px;';

		$ecommerce_mega_store_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

	$ecommerce_mega_store_container_width = get_theme_mod('ecommerce_mega_store_container_width');

			$ecommerce_mega_store_custom_css .='body{';

				$ecommerce_mega_store_custom_css .='width: '.esc_attr($ecommerce_mega_store_container_width).'%; margin: auto;';

			$ecommerce_mega_store_custom_css .='}';

		/*---------------------------Slider-content-alignment-------------------*/

	$ecommerce_mega_store_slider_content_alignment = get_theme_mod( 'ecommerce_mega_store_slider_content_alignment','CENTER-ALIGN');

	 if($ecommerce_mega_store_slider_content_alignment == 'LEFT-ALIGN'){

			$ecommerce_mega_store_custom_css .='.blog_box{';

				$ecommerce_mega_store_custom_css .='text-align:left;';

			$ecommerce_mega_store_custom_css .='}';


		}else if($ecommerce_mega_store_slider_content_alignment == 'CENTER-ALIGN'){

			$ecommerce_mega_store_custom_css .='.blog_box{';

				$ecommerce_mega_store_custom_css .='text-align:center;';

			$ecommerce_mega_store_custom_css .='}';


		}else if($ecommerce_mega_store_slider_content_alignment == 'RIGHT-ALIGN'){

			$ecommerce_mega_store_custom_css .='.blog_box{';

				$ecommerce_mega_store_custom_css .='text-align:right;';

			$ecommerce_mega_store_custom_css .='}';

		}

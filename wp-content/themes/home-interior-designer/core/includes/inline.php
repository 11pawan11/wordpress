<?php

$home_interior_designer_custom_css = '';


$home_interior_designer_is_dark_mode_enabled = get_theme_mod( 'home_interior_designer_is_dark_mode_enabled', false );

if ( $home_interior_designer_is_dark_mode_enabled ) {

    $home_interior_designer_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2) {';
    $home_interior_designer_custom_css .= 'background: #000;';
    $home_interior_designer_custom_css .= '}';

    $home_interior_designer_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,#trending h2{';
    $home_interior_designer_custom_css .= 'color: #fff;';
    $home_interior_designer_custom_css .= '}';

    $home_interior_designer_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular,.logo a,.logo span,li.menu-item-has-children:after,h1.woocommerce-products-header__title.page-title,h2.woocommerce-loop-product__title,h1.product_title.entry-title,div#tab-description h2,section.related.products h2,h2.woocommerce-Reviews-title,h2#reply-title,h2.comments-title{';
    $home_interior_designer_custom_css .= 'color: #fff !important;';
    $home_interior_designer_custom_css .= '}';

    $home_interior_designer_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.blog_box h3 a{';
    $home_interior_designer_custom_css .= 'color: #000 !important';
    $home_interior_designer_custom_css .= '}';

	$home_interior_designer_custom_css .= '.post-box{';
    $home_interior_designer_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $home_interior_designer_custom_css .= '}';
}

	/*---------------------------text-transform-------------------*/

	$home_interior_designer_text_transform = get_theme_mod( 'menu_text_transform_home_interior_designer','UPPERCASE');
    if($home_interior_designer_text_transform == 'CAPITALISE'){

		$home_interior_designer_custom_css .='#main-menu ul li a{';

			$home_interior_designer_custom_css .='text-transform: capitalize ; font-size: 15px;';

		$home_interior_designer_custom_css .='}';

	}else if($home_interior_designer_text_transform == 'UPPERCASE'){

		$home_interior_designer_custom_css .='#main-menu ul li a{';

			$home_interior_designer_custom_css .='text-transform: uppercase ; font-size: 15px;';

		$home_interior_designer_custom_css .='}';

	}else if($home_interior_designer_text_transform == 'LOWERCASE'){

		$home_interior_designer_custom_css .='#main-menu ul li a{';

			$home_interior_designer_custom_css .='text-transform: lowercase ; font-size: 15px;';

		$home_interior_designer_custom_css .='}';
	}

		/*---------------------------menu-zoom-------------------*/

		$home_interior_designer_menu_zoom = get_theme_mod( 'home_interior_designer_menu_zoom','None');

    if($home_interior_designer_menu_zoom == 'Zoomout'){

		$home_interior_designer_custom_css .='#main-menu ul li a{';

			$home_interior_designer_custom_css .='';

		$home_interior_designer_custom_css .='}';

	}else if($home_interior_designer_menu_zoom == 'Zoominn'){

		$home_interior_designer_custom_css .='#main-menu ul li a:hover{';

			$home_interior_designer_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #dd7543;';

		$home_interior_designer_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$home_interior_designer_container_width = get_theme_mod('home_interior_designer_container_width');

		$home_interior_designer_custom_css .='body{';

			$home_interior_designer_custom_css .='width: '.esc_attr($home_interior_designer_container_width).'%; margin: auto';

		$home_interior_designer_custom_css .='}';

		/*---------------------------Slider-content-alignment-------------------*/

	$home_interior_designer_slider_content_alignment = get_theme_mod( 'home_interior_designer_slider_content_alignment','LEFT-ALIGN');

	 if($home_interior_designer_slider_content_alignment == 'LEFT-ALIGN'){

			$home_interior_designer_custom_css .='.blog_box{';

				$home_interior_designer_custom_css .='text-align:left;';

			$home_interior_designer_custom_css .='}';


		}else if($home_interior_designer_slider_content_alignment == 'CENTER-ALIGN'){

			$home_interior_designer_custom_css .='.blog_box{';

				$home_interior_designer_custom_css .='text-align:center;';

			$home_interior_designer_custom_css .='}';


		}else if($home_interior_designer_slider_content_alignment == 'RIGHT-ALIGN'){

			$home_interior_designer_custom_css .='.blog_box{';

				$home_interior_designer_custom_css .='text-align:right;';

			$home_interior_designer_custom_css .='}';

		}

		/*---------------------------Copyright Text alignment-------------------*/

$home_interior_designer_copyright_text_alignment = get_theme_mod( 'home_interior_designer_copyright_text_alignment','LEFT-ALIGN');

 if($home_interior_designer_copyright_text_alignment == 'LEFT-ALIGN'){

		$home_interior_designer_custom_css .='.copy-text p{';

			$home_interior_designer_custom_css .='text-align:left;';

		$home_interior_designer_custom_css .='}';


	}else if($home_interior_designer_copyright_text_alignment == 'CENTER-ALIGN'){

		$home_interior_designer_custom_css .='.copy-text p{';

			$home_interior_designer_custom_css .='text-align:center;';

		$home_interior_designer_custom_css .='}';


	}else if($home_interior_designer_copyright_text_alignment == 'RIGHT-ALIGN'){

		$home_interior_designer_custom_css .='.copy-text p{';

			$home_interior_designer_custom_css .='text-align:right;';

		$home_interior_designer_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/

$home_interior_designer_related_product_setting = get_theme_mod('home_interior_designer_related_product_setting',true);

	if($home_interior_designer_related_product_setting == false){

		$home_interior_designer_custom_css .='.related.products, .related h2{';

			$home_interior_designer_custom_css .='display: none;';

		$home_interior_designer_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

		$home_interior_designer_scroll_top_position = get_theme_mod( 'home_interior_designer_scroll_top_position','Right');

		if($home_interior_designer_scroll_top_position == 'Right'){
	
			$home_interior_designer_custom_css .='.scroll-up{';
	
				$home_interior_designer_custom_css .='right: 20px;';
	
			$home_interior_designer_custom_css .='}';
	
		}else if($home_interior_designer_scroll_top_position == 'Left'){
	
			$home_interior_designer_custom_css .='.scroll-up{';
	
				$home_interior_designer_custom_css .='left: 20px;';
	
			$home_interior_designer_custom_css .='}';
	
		}else if($home_interior_designer_scroll_top_position == 'Center'){
	
			$home_interior_designer_custom_css .='.scroll-up{';
	
				$home_interior_designer_custom_css .='right: 50%;left: 50%;';
	
			$home_interior_designer_custom_css .='}';
		}
	
			/*---------------------------Pagination Settings-------------------*/
	
	
	$home_interior_designer_pagination_setting = get_theme_mod('home_interior_designer_pagination_setting',true);
	
		if($home_interior_designer_pagination_setting == false){
	
			$home_interior_designer_custom_css .='.nav-links{';
	
				$home_interior_designer_custom_css .='display: none;';
	
			$home_interior_designer_custom_css .='}';
		}

		/*--------------------------- Slider Opacity -------------------*/

	$home_interior_designer_slider_opacity_color = get_theme_mod( 'home_interior_designer_slider_opacity_color','1.0');

	if($home_interior_designer_slider_opacity_color == '0'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.1'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.1';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.2'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.2';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.3'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.3';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.4'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.4';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.5'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.5';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.6'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.6';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.7'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.7';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.8'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.8';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == '0.9'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:0.9';

		$home_interior_designer_custom_css .='}';

		}else if($home_interior_designer_slider_opacity_color == 'unset'){

		$home_interior_designer_custom_css .='.blog_inner_box img{';

			$home_interior_designer_custom_css .='opacity:unset';

		$home_interior_designer_custom_css .='}';

		}

	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$home_interior_designer_woocommerce_pagination_position = get_theme_mod( 'home_interior_designer_woocommerce_pagination_position','Center');

	if($home_interior_designer_woocommerce_pagination_position == 'Left'){

		$home_interior_designer_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$home_interior_designer_custom_css .='text-align: left;';

		$home_interior_designer_custom_css .='}';

	}else if($home_interior_designer_woocommerce_pagination_position == 'Center'){

		$home_interior_designer_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$home_interior_designer_custom_css .='text-align: center;';

		$home_interior_designer_custom_css .='}';

	}else if($home_interior_designer_woocommerce_pagination_position == 'Right'){

		$home_interior_designer_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$home_interior_designer_custom_css .='text-align: right;';

		$home_interior_designer_custom_css .='}';
	}


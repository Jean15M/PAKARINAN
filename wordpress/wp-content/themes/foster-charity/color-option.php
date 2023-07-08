<?php

	$foster_charity_theme_color = get_theme_mod('foster_charity_theme_color');

	$foster_charity_custom_css = '';

	$foster_charity_custom_css .='.social-media a i:hover, span.carousel-control-prev-icon i,span.carousel-control-next-icon i, .readbutton a, .post-head h3, .header-menu, button.search-submit:hover, .copyright, button,input[type="button"],input[type="submit"], hr.horizontal-line, .text-post, nav.woocommerce-MyAccount-navigation ul li, .woocommerce span.onsale, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.scrollup i,.comment-reply-link,#sidebox .tagcloud a:hover, .site-footer .tagcloud a:hover,.page-numbers,.site-footer .search-form .search-submit, #sidebox .widget_price_filter .ui-slider-horizontal .ui-slider-range, #sidebox .widget_price_filter .ui-slider .ui-slider-handle, .site-footer .widget_price_filter .ui-slider-horizontal .ui-slider-range, .site-footer .widget_price_filter .ui-slider .ui-slider-handle, .wp-block-button a, .tags p a, .nav-links .nav-previous a, .nav-links .nav-next a, .search-body button:hover, .search-body button:focus, #sidebox button[type="submit"], .site-footer .widget-area button[type="submit"]{';
		$foster_charity_custom_css .='background-color: '.esc_attr($foster_charity_theme_color).';';
	$foster_charity_custom_css .='}';

	$foster_charity_custom_css .='.mail i, .donate a, .call a,.post-info i, .main-navigation ul ul li a, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce ul.products li.product .price,.entry-content a:focus,.entry-content a:hover,.entry-summary a:focus,.entry-summary a:hover,.comment-metadata a:focus,.comment-metadata a:hover,.comment-metadata a.comment-edit-link:focus,.comment-metadata a.comment-edit-link:hover,.widget_authors a:focus strong,.widget_authors a:hover strong,.entry-title a:focus,.entry-title a:hover,.entry-meta a:focus,.entry-meta a:hover,.page-links a:focus .page-number,.page-links a:hover .page-number,.entry-footer a:focus,.entry-footer a:hover,.entry-footer .cat-links a:focus,.entry-footer .cat-links a:hover,.entry-footer .tags-links a:focus,.entry-footer .tags-links a:hover,.post-navigation a:focus,.post-navigation a:hover,.logged-in-as a:focus,.logged-in-as a:hover,a:focus .nav-title,a:hover .nav-title,.edit-link a:focus,.edit-link a:hover,.site-info a:hover,.widget .widget-title a:focus,.widget .widget-title a:hover,.widget ul li a:focus,.widget ul li a:hover,.main-navigation ul ul li a,.main-navigation li li:focus > a, .main-navigation li li:hover > a,.post-info a:hover,.blog-date a:hover,.post-link a:hover, #sidebox ul li a:hover, .navigation-top .call a, .call, .mail a:hover, .blogger h2 a:hover, #sidebox .widget a:hover, .singlebox .category a:hover, .related-posts .page-box a:hover, .related-posts h3 a:hover{';
		$foster_charity_custom_css .='color: '.esc_attr($foster_charity_theme_color).';';
	$foster_charity_custom_css .='}';

	$foster_charity_custom_css .='.donate a,.scrollup i{';
		$foster_charity_custom_css .='border-color: '.esc_attr($foster_charity_theme_color).';';
	$foster_charity_custom_css .='}';

	$foster_charity_custom_css .='.main-navigation ul ul li:hover{';
		$foster_charity_custom_css .='border-left-color: '.esc_attr($foster_charity_theme_color).';';
	$foster_charity_custom_css .='}';

	$foster_charity_custom_css .='.blogger:hover{
	box-shadow: 0 0 25px 1px '.esc_attr($foster_charity_theme_color).';
	}';

	$foster_charity_custom_css .='.site-footer ul li a:hover{';
		$foster_charity_custom_css .='color: '.esc_attr($foster_charity_theme_color).'!important;';
	$foster_charity_custom_css .='}';

	$foster_charity_custom_css .='.site-footer .woocommerce #respond input#submit:hover, .site-footer .woocommerce form.woocommerce-product-search button:hover, .site-footer .woocommerce a.button:hover, .site-footer .woocommerce button.button:hover, .site-footer .woocommerce input.button:hover{';
		$foster_charity_custom_css .='background-color: '.esc_attr($foster_charity_theme_color).'!important;';
	$foster_charity_custom_css .='}';


	/*------------------------Width Layout -------------------*/
	$foster_charity_theme_lay = get_theme_mod( 'foster_charity_theme_options','Default');
    if($foster_charity_theme_lay == 'Default'){
		$foster_charity_custom_css .='body{';
			$foster_charity_custom_css .='max-width: 100%;';
		$foster_charity_custom_css .='}';
		$foster_charity_custom_css .='.page-template-custom-home-page .middle-header{';
			$foster_charity_custom_css .='width: 97.3%';
		$foster_charity_custom_css .='}';
	}else if($foster_charity_theme_lay == 'Wide Layout'){
		$foster_charity_custom_css .='body{';
			$foster_charity_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$foster_charity_custom_css .='}';
	}else if($foster_charity_theme_lay == 'Box Layout'){
		$foster_charity_custom_css .='body{';
			$foster_charity_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$foster_charity_custom_css .='}';
	}

	// css
	$foster_charity_show_slider = get_theme_mod( 'foster_charity_slider_arrows', false);
	if($foster_charity_show_slider == false){
		$foster_charity_custom_css .='.page-template-home-custom .main-header{';
			$foster_charity_custom_css .='position: static;';
		$foster_charity_custom_css .='}';
	}

	/*--------------------- Slider Opacity -------------------*/
	$foster_charity_slider_layout = get_theme_mod( 'foster_charity_slider_opacity_color','0.6');
	if($foster_charity_slider_layout == '0'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.1'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.1';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.2'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.2';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.3'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.3';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.4'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.4';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.5'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.5';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.6'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.6';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.7'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.7';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.8'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.8';
		$foster_charity_custom_css .='}';
		}else if($foster_charity_slider_layout == '0.9'){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:0.9';
		$foster_charity_custom_css .='}';
		}

	/*-----------------Slider Content Layout --------------*/
	$foster_charity_slider_layout = get_theme_mod( 'foster_charity_slider_content_option','Center');
    if($foster_charity_slider_layout == 'Left'){
		$foster_charity_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$foster_charity_custom_css .='text-align:left; left:15%; right:45%;';
		$foster_charity_custom_css .='}';
		$foster_charity_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider .carousel-caption{';
		$foster_charity_custom_css .='top:57%;';
		$foster_charity_custom_css .='} }';
	}else if($foster_charity_slider_layout == 'Center'){
		$foster_charity_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$foster_charity_custom_css .='text-align:center; left:20%; right:20%;';
		$foster_charity_custom_css .='}';
	}else if($foster_charity_slider_layout == 'Right'){
		$foster_charity_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$foster_charity_custom_css .='text-align:right; left:45%; right:15%;';
		$foster_charity_custom_css .='}';
		$foster_charity_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider .carousel-caption{';
		$foster_charity_custom_css .='top:57%;';
		$foster_charity_custom_css .='} }';
	}

	/*---------------- Button Settings option-----------------*/
	$foster_charity_top_bottom_padding = get_theme_mod('foster_charity_top_bottom_padding');
	$foster_charity_left_right_padding = get_theme_mod('foster_charity_left_right_padding');
		$foster_charity_custom_css .='#slider .readbutton a, .form-submit input[type="submit"], .post-link a, .about-btn a, .related-posts .page-box a.post-link{';
			$foster_charity_custom_css .='padding-top: '.esc_attr($foster_charity_top_bottom_padding).'px; padding-bottom: '.esc_attr($foster_charity_top_bottom_padding).'px; padding-left: '.esc_attr($foster_charity_left_right_padding).'px; padding-right: '.esc_attr($foster_charity_left_right_padding).'px; display: inline-block;';
		$foster_charity_custom_css .='}';

	$foster_charity_border_radius = get_theme_mod('foster_charity_border_radius');
		$foster_charity_custom_css .='#slider .readbutton a, .form-submit input[type="submit"],.post-link a, .about-btn a, .related-posts .page-box a.post-link{';
			$foster_charity_custom_css .='border-radius: '.esc_attr($foster_charity_border_radius).'px;';
		$foster_charity_custom_css .='}';

	$foster_charity_show_header = get_theme_mod( 'foster_charity_button_border', false);
	if($foster_charity_show_header == true){
		$foster_charity_custom_css .='.post-link a, .related-posts .page-box a.post-link{';
			$foster_charity_custom_css .='border:2px solid #fa7e1a;margin:10px 0; ';
		$foster_charity_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/
	$foster_charity_theme_lay = get_theme_mod( 'foster_charity_blog_post_layout','Default');
    if($foster_charity_theme_lay == 'Default'){
		$foster_charity_custom_css .='.blogger{';
			$foster_charity_custom_css .='';
		$foster_charity_custom_css .='}';
	}else if($foster_charity_theme_lay == 'Center'){
		$foster_charity_custom_css .='.blogger, .blogger h2, .post-info, .blogger .text p, .blogger .post-link, .blogger .text{';
			$foster_charity_custom_css .='text-align:center;';
		$foster_charity_custom_css .='}';
		$foster_charity_custom_css .='.post-info{';
			$foster_charity_custom_css .='margin-top:10px;';
		$foster_charity_custom_css .='}';
		$foster_charity_custom_css .='.blogger .post-link{';
			$foster_charity_custom_css .='margin-top:25px;';
		$foster_charity_custom_css .='}';
		$foster_charity_custom_css .='.blogger .post-link, .post-heading{';
			$foster_charity_custom_css .='margin:20px 0;';
		$foster_charity_custom_css .='}';
	}else if($foster_charity_theme_lay == 'Left'){
		$foster_charity_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link, .blogger .text{';
			$foster_charity_custom_css .='text-align:Left;';
		$foster_charity_custom_css .='}';
		$foster_charity_custom_css .='.blogger .post-link, .post-heading{';
			$foster_charity_custom_css .='margin:20px 0;';
		$foster_charity_custom_css .='}';
		$foster_charity_custom_css .='.blogger h2{';
			$foster_charity_custom_css .='margin-top:10px;';
		$foster_charity_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$foster_charity_loader_color_setting = get_theme_mod('foster_charity_loader_color_setting');
	$foster_charity_custom_css .=' .circle .inner{';
		$foster_charity_custom_css .='border-color: '.esc_attr($foster_charity_loader_color_setting).';';
	$foster_charity_custom_css .='} ';

	$foster_charity_loader_background_color = get_theme_mod('foster_charity_loader_background_color');
	$foster_charity_custom_css .=' #pre-loader{';
		$foster_charity_custom_css .='background-color: '.esc_attr($foster_charity_loader_background_color).';';
	$foster_charity_custom_css .='} ';

	$foster_charity_theme_lay = get_theme_mod( 'foster_charity_preloader_types','Default');
    if($foster_charity_theme_lay == 'Default'){
		$foster_charity_custom_css .='{';
			$foster_charity_custom_css .='';
		$foster_charity_custom_css .='}';
	}elseif($foster_charity_theme_lay == 'Circle'){
		$foster_charity_custom_css .='.circle .inner{';
			$foster_charity_custom_css .='width:unset;';
		$foster_charity_custom_css .='}';
	}elseif($foster_charity_theme_lay == 'Two Circle'){
		$foster_charity_custom_css .='.circle .inner{';
			$foster_charity_custom_css .='width:80%;
    border-right: 5px;';
		$foster_charity_custom_css .='}';
	}

	// Responsive Media
    $foster_charity_preloader = get_theme_mod( 'foster_charity_enable_disable_preloader', false);
	if($foster_charity_preloader == true && get_theme_mod( 'foster_charity_loader_setting', false) == false){
    	$foster_charity_custom_css .='#pre-loader{';
			$foster_charity_custom_css .='visibility:hidden;';
		$foster_charity_custom_css .='} ';
	}
    if($foster_charity_preloader == true){
    	$foster_charity_custom_css .='@media screen and (max-width:575px) {';
		$foster_charity_custom_css .='#pre-loader{';
			$foster_charity_custom_css .='visibility:visible;';
		$foster_charity_custom_css .='} }';
	}else if($foster_charity_preloader == false){
		$foster_charity_custom_css .='@media screen and (max-width:575px) {';
		$foster_charity_custom_css .='#pre-loader{';
			$foster_charity_custom_css .='visibility:hidden;';
		$foster_charity_custom_css .='} }';
	}

	$foster_charity_sidebar = get_theme_mod( 'foster_charity_enable_disable_sidebar',true);
    if($foster_charity_sidebar == true){
    	$foster_charity_custom_css .='@media screen and (max-width:575px) {';
		$foster_charity_custom_css .='#sidebox{';
			$foster_charity_custom_css .='display:block;';
		$foster_charity_custom_css .='} }';
	}else if($foster_charity_sidebar == false){
		$foster_charity_custom_css .='@media screen and (max-width:575px) {';
		$foster_charity_custom_css .='#sidebox{';
			$foster_charity_custom_css .='display:none;';
		$foster_charity_custom_css .='} }';
	}

	$foster_charity_slider = get_theme_mod( 'foster_charity_enable_disable_slider',false);
	if($foster_charity_slider == true && get_theme_mod( 'foster_charity_slider_arrows', false) == false){
    	$foster_charity_custom_css .='#slider{';
			$foster_charity_custom_css .='display:none;';
		$foster_charity_custom_css .='} ';
	}
    if($foster_charity_slider == true){
    	$foster_charity_custom_css .='@media screen and (max-width:575px) {';
		$foster_charity_custom_css .='#slider{';
			$foster_charity_custom_css .='display:block;';
		$foster_charity_custom_css .='} }';
	}else if($foster_charity_slider == false){
		$foster_charity_custom_css .='@media screen and (max-width:575px){';
		$foster_charity_custom_css .='#slider{';
			$foster_charity_custom_css .='display:none;';
		$foster_charity_custom_css .='} }';
	}

	$foster_charity_sliderbutton = get_theme_mod( 'foster_charity_show_hide_slider_button',true);
	if($foster_charity_sliderbutton == true && get_theme_mod( 'foster_charity_slider_button',true) != true){
    	$foster_charity_custom_css .='#slider .readbutton{';
			$foster_charity_custom_css .='display:none;';
		$foster_charity_custom_css .='} ';
	}
    if($foster_charity_sliderbutton == true){
    	$foster_charity_custom_css .='@media screen and (max-width:575px) {';
		$foster_charity_custom_css .='#slider .readbutton{';
			$foster_charity_custom_css .='display:block;';
		$foster_charity_custom_css .='} }';
	}else if($foster_charity_sliderbutton == false){
		$foster_charity_custom_css .='@media screen and (max-width:575px){';
		$foster_charity_custom_css .='#slider .readbutton{';
			$foster_charity_custom_css .='display:none;';
		$foster_charity_custom_css .='} }';
	}

	$foster_charity_scroll = get_theme_mod( 'foster_charity_enable_disable_scrolltop',false);
	if($foster_charity_scroll == true && get_theme_mod( 'foster_charity_hide_show_scroll', false) == false){
    	$foster_charity_custom_css .='.scrollup i{';
			$foster_charity_custom_css .='display:none;';
		$foster_charity_custom_css .='} ';
	}
    if($foster_charity_scroll == true){
    	$foster_charity_custom_css .='@media screen and (max-width:575px) {';
		$foster_charity_custom_css .='.scrollup i{';
			$foster_charity_custom_css .='display:block;';
		$foster_charity_custom_css .='} }';
	}else if($foster_charity_scroll == false){
		$foster_charity_custom_css .='@media screen and (max-width:575px){';
		$foster_charity_custom_css .='.scrollup i{';
			$foster_charity_custom_css .='display:none;';
		$foster_charity_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$foster_charity_copyright_top_bottom_padding = get_theme_mod('foster_charity_copyright_top_bottom_padding');
	$foster_charity_custom_css .='.copyright{';
		$foster_charity_custom_css .='padding-top: '.esc_attr($foster_charity_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($foster_charity_copyright_top_bottom_padding).'px;';
	$foster_charity_custom_css .='}';

	$foster_charity_footer_text_font_size = get_theme_mod('foster_charity_footer_text_font_size', 16);
	$foster_charity_custom_css .='.site-info{';
		$foster_charity_custom_css .='font-size: '.esc_attr($foster_charity_footer_text_font_size).'px;';
	$foster_charity_custom_css .='}';

	// Slider Height 
	$foster_charity_slider_height_option = get_theme_mod('foster_charity_slider_height_option');
	$foster_charity_custom_css .='#slider img{';
		$foster_charity_custom_css .='height: '.esc_attr($foster_charity_slider_height_option).'px;';
	$foster_charity_custom_css .='}';
		
	// scroll to top setting
	$foster_charity_scroll_border_radius = get_theme_mod('foster_charity_scroll_border_radius');
	$foster_charity_custom_css .='.scrollup i{';
		$foster_charity_custom_css .='border-radius: '.esc_attr($foster_charity_scroll_border_radius).'px;';
	$foster_charity_custom_css .='}';

	$foster_charity_scroll_top_fontsize = get_theme_mod('foster_charity_scroll_top_fontsize');
	$foster_charity_custom_css .='.scrollup i{';
		$foster_charity_custom_css .='font-size: '.esc_attr($foster_charity_scroll_top_fontsize).'px;';
	$foster_charity_custom_css .='}';

	$foster_charity_scroll_top_bottom_padding = get_theme_mod('foster_charity_scroll_top_bottom_padding');
	$foster_charity_scroll_left_right_padding = get_theme_mod('foster_charity_scroll_left_right_padding');
	$foster_charity_custom_css .='.scrollup i{';
		$foster_charity_custom_css .='padding-top: '.esc_attr($foster_charity_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($foster_charity_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($foster_charity_scroll_left_right_padding).'px; padding-right: '.esc_attr($foster_charity_scroll_left_right_padding).'px;';
	$foster_charity_custom_css .='}';

	// comment settings
	$foster_charity_comment_button_text = get_theme_mod('foster_charity_comment_button_text', 'Post Comment');
	if($foster_charity_comment_button_text == ''){
		$foster_charity_custom_css .='#comments p.form-submit {';
			$foster_charity_custom_css .='display: none;';
		$foster_charity_custom_css .='}';
	}

	$foster_charity_comment_form_heading = get_theme_mod('foster_charity_comment_form_heading', 'Leave a Reply');
	if($foster_charity_comment_form_heading == ''){
		$foster_charity_custom_css .='#comments h2#reply-title {';
			$foster_charity_custom_css .='display: none;';
		$foster_charity_custom_css .='}';
	}

	$foster_charity_comment_form_size = get_theme_mod( 'foster_charity_comment_form_size',100);
	$foster_charity_custom_css .='#comments textarea{';
		$foster_charity_custom_css .='width: '.esc_attr($foster_charity_comment_form_size).'%;';
	$foster_charity_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$foster_charity_shop_button_padding_top = get_theme_mod('foster_charity_shop_button_padding_top', 9);
	$foster_charity_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$foster_charity_custom_css .='padding-top: '.esc_attr($foster_charity_shop_button_padding_top).'px; padding-bottom: '.esc_attr($foster_charity_shop_button_padding_top).'px;';
	$foster_charity_custom_css .='}';

	$foster_charity_shop_button_padding_left = get_theme_mod('foster_charity_shop_button_padding_left', 16);
	$foster_charity_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$foster_charity_custom_css .='padding-left: '.esc_attr($foster_charity_shop_button_padding_left).'px; padding-right: '.esc_attr($foster_charity_shop_button_padding_left).'px;';
	$foster_charity_custom_css .='}';

	$foster_charity_shop_button_border_radius = get_theme_mod('foster_charity_shop_button_border_radius',3);
	$foster_charity_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$foster_charity_custom_css .='border-radius: '.esc_attr($foster_charity_shop_button_border_radius).'px;';
	$foster_charity_custom_css .='}';

	$foster_charity_display_related_products = get_theme_mod('foster_charity_display_related_products',true);
	if($foster_charity_display_related_products == false){
		$foster_charity_custom_css .='.related.products{';
			$foster_charity_custom_css .='display: none;';
		$foster_charity_custom_css .='}';
	}

	$foster_charity_shop_products_border = get_theme_mod('foster_charity_shop_products_border', false);
	if($foster_charity_shop_products_border == true){
		$foster_charity_custom_css .='.woocommerce .products li{';
			$foster_charity_custom_css .='border: 1px solid #bbb;';
		$foster_charity_custom_css .='}';
	}

	$foster_charity_shop_page_top_padding = get_theme_mod('foster_charity_shop_page_top_padding',0);
	$foster_charity_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$foster_charity_custom_css .='padding-top: '.esc_attr($foster_charity_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($foster_charity_shop_page_top_padding).'px !important;';
	$foster_charity_custom_css .='}';

	$foster_charity_shop_page_left_padding = get_theme_mod('foster_charity_shop_page_left_padding',0);
	$foster_charity_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$foster_charity_custom_css .='padding-left: '.esc_attr($foster_charity_shop_page_left_padding).'px !important; padding-right: '.esc_attr($foster_charity_shop_page_left_padding).'px !important;';
	$foster_charity_custom_css .='}';

	$foster_charity_shop_page_border_radius = get_theme_mod('foster_charity_shop_page_border_radius',0);
	$foster_charity_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$foster_charity_custom_css .='border-radius: '.esc_attr($foster_charity_shop_page_border_radius).'px;';
	$foster_charity_custom_css .='}';

	$foster_charity_shop_page_box_shadow = get_theme_mod('foster_charity_shop_page_box_shadow',0);
	$foster_charity_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$foster_charity_custom_css .='box-shadow: '.esc_attr($foster_charity_shop_page_box_shadow).'px '.esc_attr($foster_charity_shop_page_box_shadow).'px '.esc_attr($foster_charity_shop_page_box_shadow).'px #e4e4e4;';
	$foster_charity_custom_css .='}';

	// footer widget background
	$foster_charity_footer_widget_background = get_theme_mod('foster_charity_footer_widget_background', '#000000');
	$foster_charity_custom_css .='.site-footer{';
		$foster_charity_custom_css .='background-color: '.esc_attr($foster_charity_footer_widget_background).';';
	$foster_charity_custom_css .='}';

	$foster_charity_footer_widget_image = get_theme_mod('foster_charity_footer_widget_image');
	if($foster_charity_footer_widget_image != false){
		$foster_charity_custom_css .='.site-footer{';
			$foster_charity_custom_css .='background: url('.esc_attr($foster_charity_footer_widget_image).');';
		$foster_charity_custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$foster_charity_navigation_menu_font_size = get_theme_mod('foster_charity_navigation_menu_font_size');{
		$foster_charity_custom_css .='.main-navigation a, .navigation-top a, .menu-menu-1-container ul li a{';
			$foster_charity_custom_css .='font-size: '.esc_attr($foster_charity_navigation_menu_font_size).'px;';
		$foster_charity_custom_css .='}';
	}

	$foster_charity_theme_lay = get_theme_mod( 'foster_charity_menu_text_tranform','Default');
	if($foster_charity_theme_lay == 'Capitalize'){
		$foster_charity_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a,.menu-menu-1-container ul li a{';
			$foster_charity_custom_css .='text-transform:capitalize;';
		$foster_charity_custom_css .='}';
	}

	$foster_charity_theme_lay = get_theme_mod( 'foster_charity_menu_font_weight','Default');
	if($foster_charity_theme_lay == 'Normal'){
		$foster_charity_custom_css .='.main-navigation a, .navigation-top a,.menu-menu-1-container ul li a{';
			$foster_charity_custom_css .='font-weight: normal !important;';
		$foster_charity_custom_css .='}';
	}

	// menu color
	$foster_charity_menu_color = get_theme_mod('foster_charity_menu_color');
	$foster_charity_custom_css .='.main-navigation a, .main-navigation ul li a, #site-navigation li a{';
			$foster_charity_custom_css .='color: '.esc_attr($foster_charity_menu_color).' !important;';
	$foster_charity_custom_css .='}';

	// Sub menu color
	$foster_charity_sub_menu_color = get_theme_mod('foster_charity_sub_menu_color');
	$foster_charity_custom_css .='.main-navigation ul.sub-menu a, .main-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a{';
			$foster_charity_custom_css .='color: '.esc_attr($foster_charity_sub_menu_color).' !important;';
	$foster_charity_custom_css .='}';

	// menu hover color
	$foster_charity_menu_hover_color = get_theme_mod('foster_charity_menu_hover_color');
	$foster_charity_custom_css .='.main-navigation a:hover, .main-navigation ul li a:hover, .main-navigation .current_page_item > a:hover, .main-navigation .current-menu-item > a:hover, .main-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$foster_charity_custom_css .='color: '.esc_attr($foster_charity_menu_hover_color).' !important;';
	$foster_charity_custom_css .='}';

	// Sub menu hover color
	$foster_charity_sub_menu_hover_color = get_theme_mod('foster_charity_sub_menu_hover_color');
	$foster_charity_custom_css .='.main-navigation ul.sub-menu a:hover, .main-navigation ul.sub-menu li a:hover, .main-navigation .current_page_item > a:hover, .main-navigation .current-menu-item > a:hover, .main-navigation .current_page_ancestor > a:hover, #site-navigation ul.sub-menu li a:hover{';
			$foster_charity_custom_css .='color: '.esc_attr($foster_charity_sub_menu_hover_color).' !important;';
	$foster_charity_custom_css .='}';

	// site title font size option
	$foster_charity_site_title_font_size = get_theme_mod('foster_charity_site_title_font_size', 28);{
	$foster_charity_custom_css .='.logo h1, .site-title a{';
	$foster_charity_custom_css .='font-size: '.esc_attr($foster_charity_site_title_font_size).'px;';
		$foster_charity_custom_css .='}';
	}

	$foster_charity_site_tagline_font_size_settings = get_theme_mod('foster_charity_site_tagline_font_size_settings', 16);{
	$foster_charity_custom_css .='.site-description{';
	$foster_charity_custom_css .='font-size: '.esc_attr($foster_charity_site_tagline_font_size_settings).'px !important;';
		$foster_charity_custom_css .='}';
	}

	// -------------- site logo margin ------------
	$foster_charity_logo_margin = get_theme_mod('foster_charity_logo_margin', '');{
	$foster_charity_custom_css .='.logo{';
	$foster_charity_custom_css .='margin: '.esc_attr($foster_charity_logo_margin).'px ;';
	$foster_charity_custom_css .='}';
	}
	//  ------------------logo padding-----------
	$foster_charity_logo_padding = get_theme_mod('foster_charity_logo_padding');
	$foster_charity_custom_css .='.logo{';
	$foster_charity_custom_css .='padding: '.esc_attr($foster_charity_logo_padding).'px !important;';
	$foster_charity_custom_css .='}';

	/*------------------ Background Skin Option  -------------------*/
	$foster_charity_theme_lay = get_theme_mod( 'foster_charity_background_image_type','Transparent');
    if($foster_charity_theme_lay == 'Background'){
		$foster_charity_custom_css .='.blogger, #sidebox .widget, .about-text, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering{';
			$foster_charity_custom_css .='background-color: #fff;';
		$foster_charity_custom_css .='}';
	}else if($foster_charity_theme_lay == 'Transparent'){
		$foster_charity_custom_css .='{';
			$foster_charity_custom_css .='background-color: transparent;';
		$foster_charity_custom_css .='}';
	}

	// slider overlay
	$foster_charity_show_slider_image_overlay = get_theme_mod('foster_charity_show_slider_image_overlay', true);
	if($foster_charity_show_slider_image_overlay == false){
		$foster_charity_custom_css .='#slider img{';
			$foster_charity_custom_css .='opacity:1;';
		$foster_charity_custom_css .='}';
	} 
	$foster_charity_color_slider_image_overlay = get_theme_mod('foster_charity_color_slider_image_overlay', true);
	if($foster_charity_show_slider_image_overlay != false){
		$foster_charity_custom_css .='#slider{';
			$foster_charity_custom_css .='background-color: '.esc_attr($foster_charity_color_slider_image_overlay).';';
		$foster_charity_custom_css .='}';
	}

	// woocommerce product sale settings
	$foster_charity_border_radius_product_sale_text = get_theme_mod('foster_charity_border_radius_product_sale_text',50);
	$foster_charity_custom_css .='.woocommerce span.onsale {';
		$foster_charity_custom_css .='border-radius: '.esc_attr($foster_charity_border_radius_product_sale_text).'%;';
	$foster_charity_custom_css .='}';

	$foster_charity_position_product_sale = get_theme_mod('foster_charity_position_product_sale', 'Right');
	if($foster_charity_position_product_sale == 'Right' ){
		$foster_charity_custom_css .='.woocommerce ul.products li.product .onsale{';
			$foster_charity_custom_css .=' left:auto; right:0;';
		$foster_charity_custom_css .='}';
	}elseif($foster_charity_position_product_sale == 'Left' ){
		$foster_charity_custom_css .='.woocommerce ul.products li.product .onsale{';
			$foster_charity_custom_css .=' left:0; right:auto;';
		$foster_charity_custom_css .='}';
	}

	$foster_charity_product_sale_text_size = get_theme_mod('foster_charity_product_sale_text_size',14);
	$foster_charity_custom_css .='.woocommerce span.onsale{';
		$foster_charity_custom_css .='font-size: '.esc_attr($foster_charity_product_sale_text_size).'px;';
	$foster_charity_custom_css .='}';

	$foster_charity_top_bottom_product_sale_padding = get_theme_mod('foster_charity_top_bottom_product_sale_padding');
	$foster_charity_left_right_product_sale_padding = get_theme_mod('foster_charity_left_right_product_sale_padding');
	$foster_charity_custom_css .='.woocommerce span.onsale{';
		$foster_charity_custom_css .='padding-top: '.esc_attr($foster_charity_top_bottom_product_sale_padding).'px; padding-bottom: '.esc_attr($foster_charity_top_bottom_product_sale_padding).'px; padding-left: '.esc_attr($foster_charity_left_right_product_sale_padding).'px; padding-right: '.esc_attr($foster_charity_left_right_product_sale_padding).'px; display:inline-block;';
	$foster_charity_custom_css .='}';

	// woocommerce Product Navigation
	$foster_charity_shop_products_navigation = get_theme_mod('foster_charity_shop_products_navigation', 'Yes');
	if($foster_charity_shop_products_navigation == 'No'){
		$foster_charity_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$foster_charity_custom_css .='display: none;';
		$foster_charity_custom_css .='}';
	}

	// Post Block
	$foster_charity_post_break_block_setting = get_theme_mod( 'foster_charity_post_break_block_setting','Into Blocks');
    if($foster_charity_post_break_block_setting == 'Without Blocks'){
		$foster_charity_custom_css .='.blogger, .blogger:hover{';
			$foster_charity_custom_css .='border: none; margin:30px 0; box-shadow:none;';
		$foster_charity_custom_css .='}';
	}

	// fixed header padding option
	$foster_charity_fixed_header_padding_option = get_theme_mod('foster_charity_fixed_header_padding_option');
	$foster_charity_custom_css .='.fixed-header{';
		$foster_charity_custom_css .='padding: '.esc_attr($foster_charity_fixed_header_padding_option).'px;';
	$foster_charity_custom_css .='}';

	// slider top and bottom padding
	$foster_charity_padding_top_bottom_slider_content = get_theme_mod('foster_charity_padding_top_bottom_slider_content');
	$foster_charity_padding_left_right_slider_content = get_theme_mod('foster_charity_padding_left_right_slider_content');
	$foster_charity_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$foster_charity_custom_css .='top: '.esc_attr($foster_charity_padding_top_bottom_slider_content).'%; bottom: '.esc_attr($foster_charity_padding_top_bottom_slider_content).'%;left: '.esc_attr($foster_charity_padding_left_right_slider_content).'%;right: '.esc_attr($foster_charity_padding_left_right_slider_content).'%;';
	$foster_charity_custom_css .='}';

     //Copyright background css
	$foster_charity_copyright_background_color = get_theme_mod('foster_charity_copyright_background_color');
	$foster_charity_custom_css .='.copyright{';
		$foster_charity_custom_css .='background-color: '.esc_attr($foster_charity_copyright_background_color).';';
	$foster_charity_custom_css .='}';
     
    // Blog post image border radious
    $foster_charity_blog_post_img_border_radius = get_theme_mod('foster_charity_blog_post_img_border_radius', 0);
	$foster_charity_custom_css .='.post-image img{';
		$foster_charity_custom_css .='border-radius: '.esc_attr($foster_charity_blog_post_img_border_radius).'px;';
	$foster_charity_custom_css .='}';

     // Blog post image box shadow
	$foster_charity_blog_post_img_box_shadow = get_theme_mod('foster_charity_blog_post_img_box_shadow',0);
	$foster_charity_custom_css .='.post-image img{';
		$foster_charity_custom_css .='box-shadow: '.esc_attr($foster_charity_blog_post_img_box_shadow).'px '.esc_attr($foster_charity_blog_post_img_box_shadow).'px '.esc_attr($foster_charity_blog_post_img_box_shadow).'px #ccc;';
	$foster_charity_custom_css .='}';

    // Single post image border radious
	$foster_charity_single_post_img_border_radius = get_theme_mod('foster_charity_single_post_img_border_radius', 0);
	$foster_charity_custom_css .='.blogger.singlebox .post-image img{';
		$foster_charity_custom_css .='border-radius: '.esc_attr($foster_charity_single_post_img_border_radius).'px;';
	$foster_charity_custom_css .='}';

	 // Single post image box shadow
	$foster_charity_single_post_img_box_shadow = get_theme_mod('foster_charity_single_post_img_box_shadow',0);
	$foster_charity_custom_css .='.blogger.singlebox .post-image img{';
		$foster_charity_custom_css .='box-shadow: '.esc_attr($foster_charity_single_post_img_box_shadow).'px '.esc_attr($foster_charity_single_post_img_box_shadow).'px '.esc_attr($foster_charity_single_post_img_box_shadow).'px #ccc;';
	$foster_charity_custom_css .='}';

    // site title color option
	$foster_charity_site_title_color_setting = get_theme_mod('foster_charity_site_title_color_setting');
	$foster_charity_custom_css .=' .site-title a{';
		$foster_charity_custom_css .='color: '.esc_attr($foster_charity_site_title_color_setting).';';
	$foster_charity_custom_css .='} ';

	$foster_charity_tagline_color_setting = get_theme_mod('foster_charity_tagline_color_setting');
	$foster_charity_custom_css .=' .site-description p,.site-branding-text p{';
		$foster_charity_custom_css .='color: '.esc_attr($foster_charity_tagline_color_setting).';';
	$foster_charity_custom_css .='} ';

    // Single Post Categories
	$foster_charity_show_hide_single_post_categories = get_theme_mod('foster_charity_show_hide_single_post_categories',false);
	if ($foster_charity_show_hide_single_post_categories == false) {
	$foster_charity_custom_css .='.post-info{';
	$foster_charity_custom_css .=' margin-top:20px;';
	$foster_charity_custom_css .='}';
	}

	// Single post comments
	$foster_charity_post_comment_enable = get_theme_mod('foster_charity_post_comment_enable',true);
	if($foster_charity_post_comment_enable == false){
		$foster_charity_custom_css .='#comments{';
			$foster_charity_custom_css .='display: none;';
		$foster_charity_custom_css .='}';
	} 

	//scroll to top css
	$foster_charity_scroll_background_color = get_theme_mod('foster_charity_scroll_background_color');
	$foster_charity_custom_css .='.scrollup i{';
	$foster_charity_custom_css .='background: '.esc_attr($foster_charity_scroll_background_color).';';
	$foster_charity_custom_css .='border-color: '.esc_attr($foster_charity_scroll_background_color).';';
	$foster_charity_custom_css .='}';

	$foster_charity_scroll_icon_color = get_theme_mod('foster_charity_scroll_icon_color');
	$foster_charity_custom_css .='.scrollup i{';
	$foster_charity_custom_css .='color: '.esc_attr($foster_charity_scroll_icon_color).';';
	$foster_charity_custom_css .='}';

	$foster_charity_scroll_background_hover_color = get_theme_mod('foster_charity_scroll_background_hover_color');
	$foster_charity_custom_css .='.scrollup i:hover{';
	$foster_charity_custom_css .='background: '.esc_attr($foster_charity_scroll_background_hover_color).';';
	$foster_charity_custom_css .='border-color: '.esc_attr($foster_charity_scroll_background_hover_color).';';
	$foster_charity_custom_css .='}';

	//Initial Cap
	$foster_charity_caps_enable = get_theme_mod('foster_charity_caps_enable', 'false');
	if($foster_charity_caps_enable == 'true' ){
	$foster_charity_custom_css .='.blogger .text p:nth-of-type(1)::first-letter,.blogger .inicap:nth-of-type(1)::first-letter{';
	$foster_charity_custom_css .=' font-size: 55px; font-weight: 800;';
	$foster_charity_custom_css .=' margin-right: 8px;';
	$foster_charity_custom_css .=' font-family: "Vollkorn", serif;';
	$foster_charity_custom_css .=' line-height: 1;';
	$foster_charity_custom_css .='}';
	}elseif($foster_charity_caps_enable == 'false' ){
	$foster_charity_custom_css .='.blogger .text p:nth-of-type(1)::first-letter ,.blogger .inicap:nth-of-type(1)::first-letter{';
	$foster_charity_custom_css .='display: none;';
	$foster_charity_custom_css .='}';
	}




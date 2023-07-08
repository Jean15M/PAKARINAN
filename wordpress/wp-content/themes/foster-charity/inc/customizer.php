<?php
/**
 * Foster Charity: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function foster_charity_custom_controls() {

	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-control.php' );
}

add_action( 'customize_register', 'foster_charity_custom_controls' );

function foster_charity_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'foster_charity_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'foster-charity' ),
	    'description' => __( 'Description of what this panel does.', 'foster-charity' ),
	) );

	// font array
	$foster_charity_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Typography
	$wp_customize->add_section( 'foster_charity_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'foster-charity' ),
		'panel' => 'foster_charity_panel_id'
	) );

	// This is Body Color setting
	$wp_customize->add_setting( 'foster_charity_body_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_body_color', array(
		'label' => __('Body Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_body_color',
	)));

	//This is Body FontFamily  setting
	$wp_customize->add_setting('foster_charity_body_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
		'foster_charity_body_font_family', array(
		'section'  => 'foster_charity_typography',
		'label'    => __( 'Body Fonts','foster-charity'),
		'type'     => 'select',
		'choices'  => $foster_charity_font_array,
	));

    //This is Body Fontsize setting
	$wp_customize->add_setting('foster_charity_body_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_body_font_size',array(
		'label'	=> __('Body Font Size','foster-charity'),
		'section'	=> 'foster_charity_typography',
		'setting'	=> 'foster_charity_body_font_size',
		'type'	=> 'text'
	));
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'foster_charity_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_paragraph_color', array(
		'label' => __('Paragraph Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('foster_charity_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_paragraph_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( 'Paragraph Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	$wp_customize->add_setting('foster_charity_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','foster-charity'),
		'section'	=> 'foster_charity_typography',
		'setting'	=> 'foster_charity_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'foster_charity_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_atag_color', array(
		'label' => __('"a" Tag Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('foster_charity_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_atag_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( '"a" Tag Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'foster_charity_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_li_color', array(
		'label' => __('"li" Tag Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('foster_charity_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_li_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( '"li" Tag Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'foster_charity_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_h1_color', array(
		'label' => __('H1 Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('foster_charity_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_h1_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( 'H1 Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('foster_charity_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_h1_font_size',array(
		'label'	=> __('H1 Font Size','foster-charity'),
		'section'	=> 'foster_charity_typography',
		'setting'	=> 'foster_charity_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'foster_charity_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_h2_color', array(
		'label' => __('h2 Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('foster_charity_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_h2_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( 'h2 Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('foster_charity_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_h2_font_size',array(
		'label'	=> __('h2 Font Size','foster-charity'),
		'section'	=> 'foster_charity_typography',
		'setting'	=> 'foster_charity_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'foster_charity_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_h3_color', array(
		'label' => __('h3 Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('foster_charity_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_h3_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( 'h3 Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('foster_charity_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_h3_font_size',array(
		'label'	=> __('h3 Font Size','foster-charity'),
		'section'	=> 'foster_charity_typography',
		'setting'	=> 'foster_charity_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'foster_charity_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_h4_color', array(
		'label' => __('h4 Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('foster_charity_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_h4_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( 'h4 Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('foster_charity_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_h4_font_size',array(
		'label'	=> __('h4 Font Size','foster-charity'),
		'section'	=> 'foster_charity_typography',
		'setting'	=> 'foster_charity_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'foster_charity_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_h5_color', array(
		'label' => __('h5 Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('foster_charity_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_h5_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( 'h5 Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('foster_charity_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_h5_font_size',array(
		'label'	=> __('h5 Font Size','foster-charity'),
		'section'	=> 'foster_charity_typography',
		'setting'	=> 'foster_charity_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'foster_charity_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_h6_color', array(
		'label' => __('h6 Color', 'foster-charity'),
		'section' => 'foster_charity_typography',
		'settings' => 'foster_charity_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('foster_charity_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control(
	    'foster_charity_h6_font_family', array(
	    'section'  => 'foster_charity_typography',
	    'label'    => __( 'h6 Fonts','foster-charity'),
	    'type'     => 'select',
	    'choices'  => $foster_charity_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('foster_charity_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_h6_font_size',array(
		'label'	=> __('h6 Font Size','foster-charity'),
		'section'	=> 'foster_charity_typography',
		'setting'	=> 'foster_charity_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('foster_charity_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','foster-charity'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','foster-charity'),
            'Background' => __('Background','foster-charity'),
        ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'foster_charity_theme_color_option', array( 
		'panel' => 'foster_charity_panel_id', 
		'title' => esc_html__('Theme Color Option', 'foster-charity' ) )
	);

  	$wp_customize->add_setting( 'foster_charity_theme_color', array(
	    'default' => '#fa7e1a',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_theme_color', array(
  		'label' =>__( 'Color Option', 'foster-charity' ),
	    'description' => __('One can change complete theme color on just one click.', 'foster-charity'),
	    'section' => 'foster_charity_theme_color_option',
	    'settings' => 'foster_charity_theme_color',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'foster_charity_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'foster-charity' ),
		'panel' => 'foster_charity_panel_id'
	) );

	$wp_customize->add_setting('foster_charity_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','foster-charity'),
       'section' => 'foster_charity_shop_page_options',
    ));

    $wp_customize->add_setting('foster_charity_shop_products_border',array(
       'default' => false,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','foster-charity'),
       'section' => 'foster_charity_shop_page_options',
    ));

    $wp_customize->add_setting('foster_charity_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop Page Sidebar','foster-charity'),
       'section' => 'foster_charity_shop_page_options',
    ));

    $wp_customize->add_setting('foster_charity_single_product_sidebar',array(
        'default' => true,
        'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('foster_charity_single_product_sidebar',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Single Product Sidebar','foster-charity'),
      	'section' => 'foster_charity_shop_page_options',
	));
	
	$wp_customize->add_setting( 'foster_charity_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'foster_charity_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'foster_charity_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'foster-charity' ),
		'section'  => 'foster_charity_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('foster_charity_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));	
	$wp_customize->add_control('foster_charity_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','foster-charity'),
		'section'	=> 'foster_charity_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'foster_charity_shop_page_top_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control( 'foster_charity_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','foster-charity' ),
		'section' => 'foster_charity_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'foster_charity_shop_page_left_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control( 'foster_charity_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','foster-charity' ),
		'section' => 'foster_charity_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'foster_charity_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','foster-charity' ),
		'section' => 'foster_charity_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'foster_charity_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','foster-charity' ),
		'section' => 'foster_charity_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'foster_charity_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','foster-charity' ),
		'section' => 'foster_charity_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'foster_charity_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','foster-charity' ),
		'section' => 'foster_charity_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'foster_charity_shop_button_border_radius',array(
		'default' => 3,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','foster-charity' ),
		'section' => 'foster_charity_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('foster_charity_position_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_position_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','foster-charity'),
        'section' => 'foster_charity_shop_page_options',
        'choices' => array(
            'Right' => __('Right','foster-charity'),
            'Left' => __('Left','foster-charity'),
        ),
	) );

	$wp_customize->add_setting( 'foster_charity_border_radius_product_sale_text',array(
		'default' => 50,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_border_radius_product_sale_text', array(
        'label'  => __('Product Sale Border Radius','foster-charity'),
        'section'  => 'foster_charity_shop_page_options',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

    $wp_customize->add_setting('foster_charity_top_bottom_product_sale_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_top_bottom_product_sale_padding',array(
		'label'	=> __('Top / Bottom Product Sale Padding ','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('foster_charity_left_right_product_sale_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_left_right_product_sale_padding',array(
		'label'	=> __('Left / Right Product Sale Padding','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('foster_charity_product_sale_text_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'foster_charity_sanitize_float'
	));
	$wp_customize->add_control('foster_charity_product_sale_text_size',array(
		'label'	=> __('Product Sale Text Size','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_shop_page_options',
		'type'=> 'number'
	));
	
	$wp_customize->add_setting('foster_charity_shop_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'foster_charity_sanitize_choices'
    ));
    $wp_customize->add_control('foster_charity_shop_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','foster-charity'),
       'choices' => array(
            'Yes' => __('Yes','foster-charity'),
            'No' => __('No','foster-charity'),
        ),
       'section' => 'foster_charity_shop_page_options',
    ));

  	//Layout Settings
	$wp_customize->add_section( 'foster_charity_width_layout', array(
    	'title'      => __( 'Layout Settings', 'foster-charity' ),
		'panel' => 'foster_charity_panel_id'
	) );

	$wp_customize->add_setting( 'foster_charity_single_page_breadcrumb',array(
		'default' => true,
		'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
	) );
	$wp_customize->add_control('foster_charity_single_page_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __( 'Show / Hide Single Page Breadcrumb','foster-charity'),
		'section' => 'foster_charity_width_layout'
	));

	// show/hide search
	$wp_customize->add_setting( 'foster_charity_show_hide_search',array(
		'default' => true,
      	'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ) );
    $wp_customize->add_control('foster_charity_show_hide_search',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Search','foster-charity' ),
        'section' => 'foster_charity_width_layout'
    ));

    $wp_customize->add_setting('foster_charity_search_icon_changer',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_search_icon_changer',array(
		'label'	=> __('Search Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_width_layout',
		'type'		=> 'icon'
	)));

	//Sticky Header
	$wp_customize->add_setting( 'foster_charity_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ) );
    $wp_customize->add_control('foster_charity_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','foster-charity' ),
        'section' => 'foster_charity_width_layout'
    ));

    $wp_customize->add_setting( 'foster_charity_fixed_header_padding_option', array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'foster_charity_fixed_header_padding_option', array(
		'label'       => esc_html__( 'Fixed Header Padding','foster-charity' ),
		'section'     => 'foster_charity_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('foster_charity_loader_setting',array(
       'default' => false,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','foster-charity'),
       'section' => 'foster_charity_width_layout'
    ));

    $wp_customize->add_setting('foster_charity_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','foster-charity'),
        'section' => 'foster_charity_width_layout',
        'choices' => array(
            'Default' => __('Default','foster-charity'),
            'Circle' => __('Circle','foster-charity'),
            'Two Circle' => __('Two Circle','foster-charity')
        ),
	) );

    $wp_customize->add_setting( 'foster_charity_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'foster-charity'),
	    'section' => 'foster_charity_width_layout',
	    'settings' => 'foster_charity_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'foster_charity_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'foster-charity'),
	    'section' => 'foster_charity_width_layout',
	    'settings' => 'foster_charity_loader_background_color',
  	)));

	$wp_customize->add_setting('foster_charity_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','foster-charity'),
        'description' => __('Here you can change the Width layout. ','foster-charity'),
        'section' => 'foster_charity_width_layout',
        'choices' => array(
            'Default' => __('Default','foster-charity'),
            'Wide Layout' => __('Wide Layout','foster-charity'),
            'Box Layout' => __('Box Layout','foster-charity'),
        ),
	) );

	// Button Settings
	$wp_customize->add_section( 'foster_charity_button_option', array(
		'title' => __('Button','foster-charity' ),
		'panel' => 'foster_charity_panel_id',
	));

	//Show /Hide border
	$wp_customize->add_setting( 'foster_charity_button_border',array(
		'default' => '',
      	'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ) );
    $wp_customize->add_control('foster_charity_button_border',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Border for Blog page','foster-charity' ),
        'section' => 'foster_charity_button_option'
    ));

	$wp_customize->add_setting('foster_charity_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('foster_charity_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_left_right_padding',array(
		'label'	=> __('Left and Right Padding','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'foster_charity_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'foster_charity_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','foster-charity' ),
		'section'     => 'foster_charity_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_section( 'foster_charity_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'foster-charity' ),
		'panel' => 'foster_charity_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('foster_charity_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','foster-charity'),
        'section' => 'foster_charity_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','foster-charity'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','foster-charity'),
            'Right Sidebar' => __('Right Sidebar','foster-charity'),
            'One Column' => __('Full Column','foster-charity'),
            'Grid Layout' => __('Grid Layout','foster-charity')
        ),
	) );

	$wp_customize->add_setting('foster_charity_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','foster-charity'),
        'section' => 'foster_charity_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','foster-charity'),
            'Right Sidebar' => __('Right Sidebar','foster-charity'),
            'One Column' => __('Full Column','foster-charity')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('foster_charity_topbar',array(
		'title'	=> __('Topbar','foster-charity'),
		'description'	=> __('Add Topbar Content here','foster-charity'),
		'priority'	=> null,
		'panel' => 'foster_charity_panel_id',
	));

	$wp_customize->add_setting('foster_charity_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('foster_charity_email',array(
		'label'	=> __('Add Email','foster-charity'),
		'section'	=> 'foster_charity_topbar',
		'setting'	=> 'foster_charity_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('foster_charity_email_icon_changer',array(
		'default'	=> 'fas fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_email_icon_changer',array(
		'label'	=> __('Email Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('foster_charity_call1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_phone_number'
	));	
	$wp_customize->add_control('foster_charity_call1',array(
		'label'	=> __('Add Phone Number','foster-charity'),
		'section'	=> 'foster_charity_topbar',
		'setting'	=> 'foster_charity_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('foster_charity_phone_icon_changer',array(
		'default'	=> 'fas fa-phone-volume',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_phone_icon_changer',array(
		'label'	=> __('Phone Number Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('foster_charity_donate',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('foster_charity_donate',array(
		'label'	=> __('Donate button text','foster-charity'),
		'section'	=> 'foster_charity_topbar',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('foster_charity_donate_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('foster_charity_donate_link',array(
		'label'	=> __('Add Donate Link','foster-charity'),
		'section'	=> 'foster_charity_topbar',
		'setting'	=> 'foster_charity_donate_link',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('foster_charity_donatebtn_icon_changer',array(
		'default'	=> 'fas fa-heart',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_donatebtn_icon_changer',array(
		'label'	=> __('Donate button Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_topbar',
		'type'		=> 'icon'
	)));

	//Social Icons
	$wp_customize->add_section('foster_charity_social_link',array(
		'title'	=> __('Social Media','foster-charity'),
		'description'	=> __('Add Social Media Url here','foster-charity'),
		'priority'	=> null,
		'panel' => 'foster_charity_panel_id',
	));

	$wp_customize->add_setting('foster_charity_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('foster_charity_facebook_url',array(
		'label'	=> __('Add Facebook link','foster-charity'),
		'section'	=> 'foster_charity_social_link',
		'setting'	=> 'foster_charity_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('foster_charity_facebook_icon_changer',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_facebook_icon_changer',array(
		'label'	=> __('Facebook Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_social_link',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('foster_charity_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('foster_charity_twitter_url',array(
		'label'	=> __('Add Twitter link','foster-charity'),
		'section'	=> 'foster_charity_social_link',
		'setting'	=> 'foster_charity_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('foster_charity_twitter_icon_changer',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_twitter_icon_changer',array(
		'label'	=> __('Twitter Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_social_link',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('foster_charity_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('foster_charity_instagram_url',array(
		'label'	=> __('Add instagram link','foster-charity'),
		'section'	=> 'foster_charity_social_link',
		'setting'	=> 'foster_charity_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('foster_charity_instagram_icon_changer',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_instagram_icon_changer',array(
		'label'	=> __('Instagram Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_social_link',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('foster_charity_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('foster_charity_youtube_url',array(
		'label'	=> __('Add Youtube link','foster-charity'),
		'section'	=> 'foster_charity_social_link',
		'setting'	=> 'foster_charity_youtube_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('foster_charity_youtube_icon_changer',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_youtube_icon_changer',array(
		'label'	=> __('Youtube Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_social_link',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('foster_charity_linkdin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('foster_charity_linkdin_url',array(
		'label'	=> __('Add Linkdin link','foster-charity'),
		'section'	=> 'foster_charity_social_link',
		'setting'	=> 'foster_charity_linkdin_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('foster_charity_linkdin_icon_changer',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_linkdin_icon_changer',array(
		'label'	=> __('Linkdin Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_social_link',
		'type'		=> 'icon'
	)));

	// navigation menu 
	$wp_customize->add_section( 'foster_charity_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'foster-charity' ),
		'priority'   => null,
		'panel' => 'foster_charity_panel_id'
	) );

	$wp_customize->add_setting('foster_charity_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_menu_color', array(
		'label'    => __('Menu Color', 'foster-charity'),
		'section'  => 'foster_charity_navigation_menu',
		'settings' => 'foster_charity_menu_color',
	)));

	$wp_customize->add_setting('foster_charity_sub_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_sub_menu_color', array(
		'label'    => __('Submenu Color', 'foster-charity'),
		'section'  => 'foster_charity_navigation_menu',
		'settings' => 'foster_charity_sub_menu_color',
	)));

	$wp_customize->add_setting('foster_charity_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'foster-charity'),
		'section'  => 'foster_charity_navigation_menu',
		'settings' => 'foster_charity_menu_hover_color',
	)));

	$wp_customize->add_setting('foster_charity_sub_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_sub_menu_hover_color', array(
		'label'    => __('Submenu Hover Color', 'foster-charity'),
		'section'  => 'foster_charity_navigation_menu',
		'settings' => 'foster_charity_sub_menu_hover_color',
	)));

	$wp_customize->add_setting('foster_charity_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','foster-charity'),
		'section'=> 'foster_charity_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('foster_charity_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
    ));
    $wp_customize->add_control('foster_charity_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','foster-charity'),
        'section' => 'foster_charity_navigation_menu',
        'choices' => array(
            'Default' => __('Default','foster-charity'),
            'Capitalize' => __('Capitalize','foster-charity'),
        ),
	) );

	$wp_customize->add_setting('foster_charity_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
    ));
    $wp_customize->add_control('foster_charity_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','foster-charity'),
        'section' => 'foster_charity_navigation_menu',
        'choices' => array(
            'Default' => __('Default','foster-charity'),
            'Normal' => __('Normal','foster-charity'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'foster_charity_slider' , array(
    	'title'      => __( 'Slider Settings', 'foster-charity' ),
		'priority'   => null,
		'panel' => 'foster_charity_panel_id'
	) );

	$wp_customize->add_setting('foster_charity_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('foster_charity_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','foster-charity'),
      	'section' => 'foster_charity_slider',
	));

	$wp_customize->add_setting('foster_charity_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','foster-charity'),
       'section' => 'foster_charity_slider'
    ));

    $wp_customize->add_setting('foster_charity_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','foster-charity'),
       'section' => 'foster_charity_slider'
    ));

    $wp_customize->add_setting('foster_charity_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','foster-charity'),
       'section' => 'foster_charity_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'foster_charity_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'foster_charity_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'foster_charity_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'foster-charity' ),
			'section'  => 'foster_charity_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'foster_charity_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'foster_charity_sanitize_number_range',
	));
	$wp_customize->add_control( 'foster_charity_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','foster-charity' ),
		'section' => 'foster_charity_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('foster_charity_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_slider_height_option',array(
		'label'	=> __('Slider Height Option','foster-charity'),
		'section'=> 'foster_charity_slider',
		'type'=> 'number'
	));

    $wp_customize->add_setting('foster_charity_slider_content_option',array(
    'default' => 'Center',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','foster-charity'),
        'section' => 'foster_charity_slider',
        'choices' => array(
            'Center' => __('Center','foster-charity'),
            'Left' => __('Left','foster-charity'),
            'Right' => __('Right','foster-charity'),
        ),
	) );

	$wp_customize->add_setting('foster_charity_slider_button_text',array(
		'default'=> __('READ MORE','foster-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_slider_button_text',array(
		'label'	=> __('Slider Button Text','foster-charity'),
		'section'=> 'foster_charity_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'foster_charity_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'foster_charity_sanitize_number_range',
	) );
	$wp_customize->add_control( 'foster_charity_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','foster-charity' ),
		'section'     => 'foster_charity_slider',
		'type'        => 'range',
		'settings'    => 'foster_charity_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('foster_charity_slider_opacity_color',array(
      'default'              => 0.6,
      'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control( 'foster_charity_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','foster-charity' ),
	'section'     => 'foster_charity_slider',
	'type'        => 'select',
	'settings'    => 'foster_charity_slider_opacity_color',
	'choices' => array(
		'0' =>  esc_attr('0','foster-charity'),
		'0.1' =>  esc_attr('0.1','foster-charity'),
		'0.2' =>  esc_attr('0.2','foster-charity'),
		'0.3' =>  esc_attr('0.3','foster-charity'),
		'0.4' =>  esc_attr('0.4','foster-charity'),
		'0.5' =>  esc_attr('0.5','foster-charity'),
		'0.6' =>  esc_attr('0.6','foster-charity'),
		'0.7' =>  esc_attr('0.7','foster-charity'),
		'0.8' =>  esc_attr('0.8','foster-charity'),
		'0.9' =>  esc_attr('0.9','foster-charity')
	),
	));

	$wp_customize->add_setting('foster_charity_padding_top_bottom_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_padding_top_bottom_slider_content',array(
		'label'	=> __('Top Bottom Slider Content Padding','foster-charity'),
		'section'=> 'foster_charity_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('foster_charity_padding_left_right_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_padding_left_right_slider_content',array(
		'label'	=> __('Left Right Slider Content Padding','foster-charity'),
		'section'=> 'foster_charity_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('foster_charity_show_slider_image_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_show_slider_image_overlay',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Image Overlay Slider','foster-charity'),
       'section' => 'foster_charity_slider'
    ));

    $wp_customize->add_setting('foster_charity_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'foster-charity'),
		'section'  => 'foster_charity_slider',
		'settings' => 'foster_charity_color_slider_image_overlay',
	)));

	//How can you help
	$wp_customize->add_section('foster_charity_how_can_you_help',array(
		'title'	=> __('How Can You Help','foster-charity'),
		'description'	=> __('Add Service Section below.','foster-charity'),
		'panel' => 'foster_charity_panel_id',
	));

	$wp_customize->add_setting('foster_charity_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_section_title',array(
		'label'	=> __('Section title','foster-charity'),
		'section'	=> 'foster_charity_how_can_you_help',
		'setting'	=> 'foster_charity_section_title',
		'type'		=> 'text'
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';	
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('foster_charity_single_post',array(
		'default'	=> 'select',
		'sanitize_callback' => 'foster_charity_sanitize_choices',
	));
	$wp_customize->add_control('foster_charity_single_post',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','foster-charity'),
		'section' => 'foster_charity_how_can_you_help',
	));

	$wp_customize->add_setting('foster_charity_single_post1',array(
		'default'	=> 'select',
		'sanitize_callback' => 'foster_charity_sanitize_choices',
	));
	$wp_customize->add_control('foster_charity_single_post1',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select Post','foster-charity'),
		'section' => 'foster_charity_how_can_you_help',
	));

	$wp_customize->add_setting('foster_charity_single_post2',array(
		'default'	=> 'select',
		'sanitize_callback' => 'foster_charity_sanitize_choices',
	));
	$wp_customize->add_control('foster_charity_single_post2',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select Post','foster-charity'),
		'section' => 'foster_charity_how_can_you_help',
	));

	//no Result Setting
	$wp_customize->add_section('foster_charity_no_result_setting',array(
		'title'	=> __('No Results Settings','foster-charity'),
		'panel' => 'foster_charity_panel_id',
	));	

	$wp_customize->add_setting('foster_charity_no_search_result_title',array(
		'default'=> __('Nothing Found','foster-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_no_search_result_title',array(
		'label'	=> __('No Search Results Title','foster-charity'),
		'section'=> 'foster_charity_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('foster_charity_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','foster-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_no_search_result_content',array(
		'label'	=> __('No Search Results Content','foster-charity'),
		'section'=> 'foster_charity_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('foster_charity_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','foster-charity'),
		'panel' => 'foster_charity_panel_id',
	));	

	$wp_customize->add_setting('foster_charity_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','foster-charity'),
		'section'=> 'foster_charity_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('foster_charity_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','foster-charity'),
		'section'=> 'foster_charity_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('foster_charity_mobile_media',array(
		'title'	=> __('Mobile Media Settings','foster-charity'),
		'panel' => 'foster_charity_panel_id',
	));

    $wp_customize->add_setting('foster_charity_enable_disable_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_enable_disable_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','foster-charity'),
       'section' => 'foster_charity_mobile_media'
    ));

	$wp_customize->add_setting('foster_charity_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','foster-charity'),
       'section' => 'foster_charity_mobile_media'
    ));

    $wp_customize->add_setting('foster_charity_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','foster-charity'),
       'section' => 'foster_charity_mobile_media'
    ));

    $wp_customize->add_setting('foster_charity_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','foster-charity'),
       'section' => 'foster_charity_mobile_media'
    ));

    $wp_customize->add_setting('foster_charity_enable_disable_scrolltop',array(
       'default' => false,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','foster-charity'),
       'section' => 'foster_charity_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('foster_charity_blog_post',array(
		'title'	=> __('Post Settings','foster-charity'),
		'panel' => 'foster_charity_panel_id',
	));	

	$wp_customize->add_setting('foster_charity_caps_enable',array(
		'default' => false,
		'sanitize_callback' => 'foster_charity_sanitize_checkbox',
	));
	$wp_customize->add_control( 'foster_charity_caps_enable', array(
			'label' => esc_html__('Initial Cap (First Big Letter)', 'foster-charity'),
			'type' => 'checkbox',
			'section' => 'foster_charity_blog_post',
	));

	$wp_customize->add_setting('foster_charity_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','foster-charity'),
       'section' => 'foster_charity_blog_post'
    ));

    $wp_customize->add_setting('foster_charity_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','foster-charity'),
       'section' => 'foster_charity_blog_post'
    ));

    $wp_customize->add_setting('foster_charity_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('foster_charity_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','foster-charity'),
       'section' => 'foster_charity_blog_post'
    ));

    $wp_customize->add_setting('foster_charity_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_post_comment_icon_changer',array(
		'label'	=> __('Post Comments Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('foster_charity_post_time_show',array(
       'default' => false,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_post_time_show',array(
       'type' => 'checkbox',
       'label' => __('Time','foster-charity'),
       'section' => 'foster_charity_blog_post'
    ));

    $wp_customize->add_setting('foster_charity_blog_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_blog_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Post Image','foster-charity'),
       'section' => 'foster_charity_blog_post'
    ));

    $wp_customize->add_setting( 'foster_charity_blog_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'foster_charity_blog_post_img_border_radius', array(
		'label'       => esc_html__( 'Post Image Border Radius','foster-charity' ),
		'section'     => 'foster_charity_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'foster_charity_blog_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_blog_post_img_box_shadow',array(
		'label' => esc_html__( 'Post Image Shadow','foster-charity' ),
		'section' => 'foster_charity_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting('foster_charity_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
    ));
    $wp_customize->add_control('foster_charity_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','foster-charity'),
        'section' => 'foster_charity_blog_post',
        'choices' => array(
            'Default' => __('Default','foster-charity'),
            'Center' => __('Center','foster-charity'),
            'Left' => __('Left','foster-charity'),
        ),
	) );

	$wp_customize->add_setting('foster_charity_post_break_block_setting',array(
        'default' => 'Into Blocks',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_post_break_block_setting',array(
        'type' => 'radio',
        'label' => __('Display Blog Page posts','foster-charity'),
        'section' => 'foster_charity_blog_post',
        'choices' => array(
            'Into Blocks' => __('Into Blocks','foster-charity'),
            'Without Blocks' => __('Without Blocks','foster-charity'),
        ),
	) );

	$wp_customize->add_setting('foster_charity_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','foster-charity'),
        'section' => 'foster_charity_blog_post',
        'choices' => array(
            'None' => __('None','foster-charity'),
            'Post Excerpt' => __('Post Excerpt','foster-charity'),
            'Post Content' => __('Post Content','foster-charity'),
        ),
	) );

    $wp_customize->add_setting( 'foster_charity_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'foster_charity_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','foster-charity' ),
		'section'     => 'foster_charity_blog_post',
		'type'        => 'number',
		'settings'    => 'foster_charity_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'foster_charity_post_excerpt_suffix', array(
		'default'   => __('{...}','foster-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'foster_charity_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','foster-charity' ),
		'section'     => 'foster_charity_blog_post',
		'type'        => 'text',
		'settings'    => 'foster_charity_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('foster_charity_button_text',array(
		'default'=> __('Continue Reading....','foster-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_button_text',array(
		'label'	=> __('Add Button Text','foster-charity'),
		'section'=> 'foster_charity_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('foster_charity_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','foster-charity'),
       'section' => 'foster_charity_blog_post'
    ));

	$wp_customize->add_setting( 'foster_charity_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'foster_charity_sanitize_choices'
    ));
    $wp_customize->add_control( 'foster_charity_pagination_option', array(
        'section' => 'foster_charity_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'foster-charity' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'foster-charity' ),
            'next-prev' => __( 'Next / Previous', 'foster-charity' ),
    )));

	// Single post setting
    $wp_customize->add_section('foster_charity_single_post_section',array(
		'title'	=> __('Single Post Settings','foster-charity'),
		'panel' => 'foster_charity_panel_id',
	));	

	$wp_customize->add_setting('foster_charity_single_post_breadcrumb',array(
		'default' => false,
		'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('foster_charity_single_post_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Breadcrumb','foster-charity'),
		'section' => 'foster_charity_single_post_section',
	));

	$wp_customize->add_setting('foster_charity_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    $wp_customize->add_setting('foster_charity_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));
 
     $wp_customize->add_setting( 'foster_charity_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'foster_charity_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','foster-charity' ),
		'section'     => 'foster_charity_single_post_section',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'foster_charity_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','foster-charity' ),
		'section' => 'foster_charity_single_post_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));
    
	$wp_customize->add_setting('foster_charity_single_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    $wp_customize->add_setting('foster_charity_single_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    $wp_customize->add_setting('foster_charity_single_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    $wp_customize->add_setting('foster_charity_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

     $wp_customize->add_setting('foster_charity_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
 	));
 	$wp_customize->add_control('foster_charity_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Categories','foster-charity'),
		'section' => 'foster_charity_single_post_section'
	));
    
    $wp_customize->add_setting('foster_charity_comment_form_heading',array(
       'default' => __('Leave a Reply','foster-charity'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('foster_charity_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    $wp_customize->add_setting('foster_charity_comment_button_text',array(
       'default' => __('Post Comment','foster-charity'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('foster_charity_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    $wp_customize->add_setting( 'foster_charity_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'foster_charity_sanitize_number_range',
	));
	$wp_customize->add_control('foster_charity_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','foster-charity' ),
		'section' => 'foster_charity_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('foster_charity_nav_links',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));

	$wp_customize->add_setting('foster_charity_post_comment_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('foster_charity_post_comment_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Post Comment','foster-charity'),
		'section' => 'foster_charity_single_post_section',
	));

    $wp_customize->add_control('foster_charity_nav_links',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Nav Links','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    $wp_customize->add_setting('foster_charity_prev_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('foster_charity_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    $wp_customize->add_setting('foster_charity_next_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('foster_charity_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','foster-charity'),
       'section' => 'foster_charity_single_post_section'
    ));

    // related post setting
    $wp_customize->add_section('foster_charity_related_post_section',array(
		'title'	=> __('Related Post Settings','foster-charity'),
		'panel' => 'foster_charity_panel_id',
	));	

	$wp_customize->add_setting('foster_charity_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
    ));
    $wp_customize->add_control('foster_charity_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','foster-charity'),
       'section' => 'foster_charity_related_post_section',
    ));

	$wp_customize->add_setting( 'foster_charity_show_related_post', array(
        'default' => 'By Categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'foster_charity_show_related_post', array(
        'section' => 'foster_charity_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'foster-charity' ),
        'choices' => array(
            'categories'  => __(' By Categories', 'foster-charity'),
            'tags' => __( ' By Tags', 'foster-charity' ),
    )));

    $wp_customize->add_setting('foster_charity_change_related_post_title',array(
		'default'=> __('Related Posts','foster-charity'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','foster-charity'),
		'section'=> 'foster_charity_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('foster_charity_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','foster-charity'),
		'section'=> 'foster_charity_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));
	
	$wp_customize->add_setting( 'foster_charity_related_post_excerpt_number',array(
		'default' =>20,
		'sanitize_callback' => 'foster_charity_sanitize_number_range'
	));

	$wp_customize->add_control( 'foster_charity_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','foster-charity' ),
		'section' => 'foster_charity_related_post_section',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	//Footer
	$wp_customize->add_section('foster_charity_footer' , array(
    	'title'      => __( 'Footer Section', 'foster-charity' ),
		'priority'   => null,
		'panel' => 'foster_charity_panel_id'
	) );

	$wp_customize->add_setting('foster_charity_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'foster_charity_sanitize_choices',
    ));
    $wp_customize->add_control('foster_charity_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'foster-charity'),
        'section'     => 'foster_charity_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'foster-charity'),
        'choices' => array(
            '1'     => __('One', 'foster-charity'),
            '2'     => __('Two', 'foster-charity'),
            '3'     => __('Three', 'foster-charity'),
            '4'     => __('Four', 'foster-charity')
        ),
    ));

    $wp_customize->add_setting( 'foster_charity_footer_widget_background', array(
	    'default' => '#000000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_footer_widget_background', array(
  		'label' => __('Footer Widget Background','foster-charity'),
	    'section' => 'foster_charity_footer',
  	)));

  	$wp_customize->add_setting('foster_charity_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'foster_charity_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','foster-charity'),
        'section' => 'foster_charity_footer'
	)));

	$wp_customize->add_setting('foster_charity_hide_show_scroll',array(
        'default' => false,
        'sanitize_callback'	=> 'foster_charity_sanitize_checkbox'
	));
	$wp_customize->add_control('foster_charity_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','foster-charity'),
      	'section' => 'foster_charity_footer',
	));

	$wp_customize->add_setting('foster_charity_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new foster_charity_Icon_Changer(
        $wp_customize,'foster_charity_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','foster-charity'),
		'transport' => 'refresh',
		'section'	=> 'foster_charity_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('foster_charity_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'foster_charity_sanitize_choices'
	));
	$wp_customize->add_control('foster_charity_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','foster-charity'),
        'description' => __('Here you can change the Footer layout. ','foster-charity'),
        'section' => 'foster_charity_footer',
        'choices' => array(
            'Left align' => __('Left align','foster-charity'),
            'Right align' => __('Right align','foster-charity'),
            'Center align' => __('Center align','foster-charity'),
        ),
	) );

	$wp_customize->add_setting('foster_charity_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'foster_charity_sanitize_number_range',
	));
	$wp_customize->add_control('foster_charity_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('foster_charity_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('foster_charity_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'foster_charity_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	) );
	$wp_customize->add_control( 'foster_charity_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','foster-charity' ),
		'section'     => 'foster_charity_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('foster_charity_scroll_background_color', array(
		'default'           => '#fa7e1a',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_scroll_background_color', array(
		'label'    => __('Scroll To Top Background Color', 'foster-charity'),
		'section'  => 'foster_charity_footer',
	)));

	$wp_customize->add_setting('foster_charity_scroll_icon_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_scroll_icon_color', array(
		'label'    => __('Scroll To Top Color', 'foster-charity'),
		'section'  => 'foster_charity_footer',
	)));

	$wp_customize->add_setting('foster_charity_scroll_background_hover_color', array(
		'default'           => '#fa7e1a',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_scroll_background_hover_color', array(
		'label'    => __('Scroll To Top Background Hover Color', 'foster-charity'),
		'section'  => 'foster_charity_footer',
	)));

	$wp_customize->add_setting('foster_charity_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('foster_charity_footer_text',array(
		'label'	=> __('Add Copyright Text','foster-charity'),
		'section'	=> 'foster_charity_footer',
		'setting'	=> 'foster_charity_footer_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('foster_charity_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','foster-charity'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'foster_charity_footer',
		'type'=> 'number'
	));

	 $wp_customize->add_setting('foster_charity_copyright_background_color', array(
		'default'           => '#fa7e1a',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'foster_charity_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'foster-charity'),
		'section'  => 'foster_charity_footer',
	)));

	$wp_customize->add_setting('foster_charity_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'foster_charity_sanitize_float',
	));
	$wp_customize->add_control('foster_charity_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','foster-charity'),
		'section'=> 'foster_charity_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'foster_charity_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'foster_charity_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'foster_charity_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Foster Charity 1.0
 * @see foster-charity_customize_register()
 *
 * @return void
 */
function foster_charity_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Foster Charity 1.0
 * @see foster-charity_customize_register()
 *
 * @return void
 */
function foster_charity_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function foster_charity_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Foster_Charity_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Foster_Charity_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Foster_Charity_Customize_Section_Pro(
				$manager,
				'foster_charity_example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Foster Charity Pro', 'foster-charity' ),
					'pro_text' => esc_html__( 'Go Pro', 'foster-charity' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/charity-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'foster-charity-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'foster-charity-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Foster_Charity_Customize::get_instance();
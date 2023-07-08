<?php
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function foster_charity_logo_customize_register( $wp_customize ) {
	// Logo Resizer additions
	$wp_customize->add_setting( 'logo_size', array(
		'default'              => 50,
		'type'                 => 'theme_mod',
		'theme_supports'       => 'custom-logo',
		'transport'            => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );

	$wp_customize->add_control( 'logo_size', array(
		'label'       => esc_html__( 'Logo Size','foster-charity' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'number',
		'settings'    => 'logo_size',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 100,
			'aria-valuenow'    => 50,
			'aria-orientation' => 'horizontal',
		),
	) );

	// logo padding
	$wp_customize->add_setting('foster_charity_logo_padding',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_logo_padding',array(
		'label' => __('Logo Padding','foster-charity'),
		'priority'    => 9,
		'input_attrs' => array(
		'step' => 1,
		'min' => 0,
		'max' => 100,
		),
		'section'=> 'title_tagline',
		'type'=> 'number'
	));

	$wp_customize->add_setting('foster_charity_logo_margin',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_logo_margin',array(
		'label' => __( 'Logo Margin (px)','foster-charity' ),
		'section'=> 'title_tagline',
		'type'	=> 'number',
		'priority'    => 9,
		'input_attrs' => array(
		'step'  => 1,
			'min'   => 0,
			'max'   => 100,
		),
	));
	

	$wp_customize->add_setting('foster_charity_show_site_title',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('foster_charity_show_site_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Logo Site Title','foster-charity'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('foster_charity_site_title_font_size',array(
		'default'	=> 28,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_site_title_font_size',array(
		'label'	=> __('Logo Site Title Font Size','foster-charity'),
		'section'	=> 'title_tagline',
		'setting'	=> 'foster_charity_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

    $wp_customize->add_setting('foster_charity_show_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('foster_charity_show_tagline',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Logo Site Tagline','foster-charity'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting( 'foster_charity_site_title_color_setting', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_site_title_color_setting', array(
  		'label' => __('Site Title Color Option', 'foster-charity'),
		'section' => 'title_tagline',
		'settings' => 'foster_charity_site_title_color_setting',
  	)));

  	$wp_customize->add_setting( 'foster_charity_tagline_color_setting', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foster_charity_tagline_color_setting', array(
  		'label' => __('Tagline Color Option', 'foster-charity'),
		'section' => 'title_tagline',
		'settings' => 'foster_charity_tagline_color_setting',
  	)));  

    $wp_customize->add_setting('foster_charity_site_tagline_font_size_settings',array(
		'default'	=> 16,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('foster_charity_site_tagline_font_size_settings',array(
		'label'	=> __('Logo Tagline Font Size','foster-charity'),
		'section'	=> 'title_tagline',
		'setting'	=> 'foster_charity_site_tagline_font_size_settings',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));
}
add_action( 'customize_register', 'foster_charity_logo_customize_register' );

/**
 * Add support for logo resizing by filtering `get_custom_logo`
 */
function foster_charity_customize_logo_resize( $html ) {
	$size = get_theme_mod( 'logo_size' );
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	// set the short side minimum
	$min = 48;

	// don't use empty() because we can still use a 0
	if ( is_numeric( $size ) && is_numeric( $custom_logo_id ) ) {

		// we're looking for $img['width'] and $img['height'] of original image
		$logo = wp_get_attachment_metadata( $custom_logo_id );
		if ( ! $logo ) return $html;

		// get the logo support size
		$sizes = get_theme_support( 'custom-logo' );

		// Check for max height and width, default to image sizes if none set in theme
		$max['height'] = isset( $sizes[0]['height'] ) ? $sizes[0]['height'] : $logo['height'];
		$max['width'] = isset( $sizes[0]['width'] ) ? $sizes[0]['width'] : $logo['width'];

		// landscape or square
		if ( $logo['width'] >= $logo['height'] ) {
			$output = foster_charity_min_max( $logo['height'], $logo['width'], $max['height'], $max['width'], $size, $min );
			$img = array(
				'height'	=> $output['short'],
				'width'		=> $output['long']
			);
		// portrait
		} else if ( $logo['width'] < $logo['height'] ) {
			$output = foster_charity_min_max( $logo['width'], $logo['height'], $max['width'], $max['height'], $size, $min );
			$img = array(
				'height'	=> $output['long'],
				'width'		=> $output['short']
			);
		}

		// add the CSS
		$css = '
			<style>
			.custom-logo {
				height: ' . $img['height'] . 'px;
				max-height: ' . $max['height'] . 'px;
				max-width: ' . $max['width'] . 'px;
				width: ' . $img['width'] . 'px;
			}
			</style>';

		$html = $css . $html;
	}

	return $html;
}
add_filter( 'get_custom_logo', 'foster_charity_customize_logo_resize' );

/* Helper function to determine the max size of the logo */
function foster_charity_min_max( $short, $long, $short_max, $long_max, $percent, $min ){
	$ratio = ( $long / $short );
	$max['long'] = ( $long_max >= $long ) ? $long : $long_max;
	$max['short'] = ( $short_max >= ( $max['long'] / $ratio ) ) ? floor( $max['long'] / $ratio ) : $short_max;

	$ppp = ( $max['short'] - $min ) / 100;

	$size['short'] = round( $min + ( $percent * $ppp ) );
	$size['long'] = round( $size['short'] / ( $short / $long ) );

	return $size;
}

/**
 * JS handlers for Customizer Controls
 */
function foster_charity_customize_controls_js() {
	wp_enqueue_script( 'foster-charity-customizer-controls', esc_url(get_template_directory_uri()) . '/inc/logo/js/customize-controls.js', array( 'jquery', 'customize-preview' ), '201709071000', true );
}
add_action( 'customize_controls_enqueue_scripts', 'foster_charity_customize_controls_js' );

/**
 * Adds CSS to the Customizer controls.
 */
function foster_charity_customize_css() {
	wp_add_inline_style( 'customize-controls', '#customize-control-logo_size input[type=range] { width: 100%; }' );
}
add_action( 'customize_controls_enqueue_scripts', 'foster_charity_customize_css' );

/**
 * Testing function to remove logo_size theme mod
 */
function foster_charity_remove_theme_mod() {
	if ( isset( $_GET['remove_logo_size'] ) && 'true' == $_GET['remove_logo_size'] ){
		set_theme_mod( 'logo_size', '' );
	}
}
add_action( 'wp_loaded', 'foster_charity_remove_theme_mod' );
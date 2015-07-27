<?php
/**
 * _tk Theme Customizer
 *
 * @package _tk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Contact Section
	$wp_customize->add_section( 'contact-info' , array(
		'title' => __( 'Contact Information', '_tk' ),
		'priority' => 30
		) );
// Add Phone Setting
	$wp_customize->add_setting( 'phone' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone', array(
		'label' => __( 'Phone Number', '_tk' ),
		'section' => 'contact-info',
		'settings' => 'phone',
		) ) );

	// Add Email Setting
	$wp_customize->add_setting( 'email' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email', array(
		'label' => __( 'Email address', '_tk' ),
		'section' => 'contact-info',
		'settings' => 'email',
		) ) );
		
//	echo get_theme_mod( 'email' );	this is how you fetch the information	
}
add_action( 'customize_register', '_tk_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _tk_customize_preview_js() {
	wp_enqueue_script( '_tk_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_tk_customize_preview_js' );

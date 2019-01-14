<?php
/**
 * WordPress.com-specific functions and definitions
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Quadra
 */

function quadra_theme_colors() {
	global $themecolors;

	/**
	 * Set a default theme color array for WP.com.
	 *
	 * @global array $themecolors
	 */
	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
			'bg' => 'f2f1ef',
			'border' => 'ada79b',
			'text' => '53412e',
			'link' => 'e46049',
			'url' => 'e46049',
		);
	endif;
}
add_action( 'after_setup_theme', 'quadra_theme_colors' );

/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function quadra_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );
		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'quadra-pt-serif' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'quadra_dequeue_fonts' );
<?php
/**
 * Cme Site Blue
 *
 * @package Cme_Site
 * @subpackage Cme_Site-Blue
 * @since Cme Site Blue 1.0
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
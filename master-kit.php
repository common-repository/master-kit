<?php
/**
 *
 * Plugin Name: Master Kit
 * Author: Aftabul Islam
 * Author URI: http://www.giribaz.com
 * Version: 1.0.2
 * Author Email: toaihimel@gmail.com
 * Requires PHP: 5.6
 * Tested up to: 5.6
 * Text domain: master-kit
 * License: GPLv2
 * Description: A helper plugin for masterpiece theme.
 *
 * */

// Security check
defined('ABSPATH') || die();

// Registering assets
function master_kit_assets_register(){
    
    // Owl Carousel
    wp_register_style('master-kit-owl-carousel-style', plugins_url('vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css', __FILE__));
    wp_register_style('master-kit-owl-carousel-theme-style', plugins_url('vendor/owl-carousel-2.3.4/assets/owl.theme.default.min.css', __FILE__), array('master-kit-owl-carousel-style'));

    wp_register_script('master-kit-owl-carousel-script', plugins_url('vendor/owl-carousel-2.3.4/owl.carousel.min.js', __FILE__), array('jquery'), true);

    // Fontawsome
    wp_register_style('master-kit-font-awsome-style', plugins_url('vendor/fontawsome-4.7.0/css/font-awesome.min.css', __FILE__));

}
add_action( 'wp_enqueue_scripts', 'master_kit_assets_register' );

require_once( plugin_dir_path(__FILE__) .  'inc' . DIRECTORY_SEPARATOR . '__init__.php');
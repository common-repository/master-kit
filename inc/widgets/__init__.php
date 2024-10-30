<?php 
// Security check
defined('ABSPATH') || die();

require_once( plugin_dir_path(__FILE__) .  'post-slider' . DIRECTORY_SEPARATOR . 'post-slider.php');
require_once( plugin_dir_path(__FILE__) .  'social' . DIRECTORY_SEPARATOR . 'social.php');
require_once( plugin_dir_path(__FILE__) .  'contact' . DIRECTORY_SEPARATOR . 'contact.php');
require_once( plugin_dir_path(__FILE__) .  'category-slider' . DIRECTORY_SEPARATOR . 'category-slider.php');
require_once( plugin_dir_path(__FILE__) .  'post-widget' . DIRECTORY_SEPARATOR . 'post-widget.php');
require_once( plugin_dir_path(__FILE__) .  'author' . DIRECTORY_SEPARATOR . 'author.php');

function master_kit_load_widget() {
    register_widget( 'MasterKitPostSliderWidget' );
    register_widget( 'MasterKitSocialWidget' );
    register_widget( 'MasterKitContactWidget' );
    register_widget( 'MasterKitCategorySliderWidget' );
    register_widget( 'MasterKitPostWidget' );
    register_widget( 'MasterKitAuthorWidget' );
}
add_action( 'widgets_init', 'master_kit_load_widget' );
<?php 
// Security check
defined('ABSPATH') || die();

if( !class_exists('MasterKitContactWidget') ):

class MasterKitContactWidget extends WP_Widget{

    public function __construct(){
        parent::__construct(
            'mkc_widget',
            __('MasterKit Contact Info', 'master-kit'),
            array(
                'description' => __('Adding basic contact information like email, phone & short address.', 'master-kit'),
                'customize_selective_refresh' => true,
            )
        );
        
        add_action('admin_enqueue_scripts', array(&$this, 'enqueue_scripts'));
    }

    public function enqueue_scripts(){

        // wp_enqueue_style('wp-color-picker');
        // wp_enqueue_script('wp-color-picker');

    }

    public function widget($args, $instance){
        echo $args['before_widget'];
        include "template" . DIRECTORY_SEPARATOR . 'contact.php';
        echo $args['after_widget'];
    }

    public function form($instance){
        
        // Loading defaults
        if(!isset($instance['email'])) $instance['email'] = '';
        if(!isset($instance['phone'])) $instance['phone'] = '';
        if(!isset($instance['address'])) $instance['address'] = '';
        
        include "template" . DIRECTORY_SEPARATOR . 'form.php';
    }

}

endif;
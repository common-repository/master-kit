<?php 
// Security check
defined('ABSPATH') || die();

if( !class_exists('MasterKitSocialWidget') ):

class MasterKitSocialWidget extends WP_Widget{

    public function __construct(){
        parent::__construct(
            'mks_widget',
            __('MasterKit Social Links', 'master-kit'),
            array(
                'description' => __('Add different kind of social links.', 'master-kit'),
                'customize_selective_refresh' => true,
            )
        );
        
        add_action('admin_enqueue_scripts', array(&$this, 'enqueue_scripts'));
    }

    public function enqueue_scripts(){

        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');

    }

    public function widget($args, $instance){
        echo $args['before_widget'];
        include "template" . DIRECTORY_SEPARATOR . 'links.php';
        echo $args['after_widget'];
    }

    public function form($instance){
        
        // Loading defaults
        if(!isset($instance['facebook-url'])) $instance['facebook-url'] = '';
        if(!isset($instance['twitter-url'])) $instance['twitter-url'] = '';
        if(!isset($instance['youtube-url'])) $instance['youtube-url'] = '';
        if(!isset($instance['pinterest-url'])) $instance['pinterest-url'] = '';
        if(!isset($instance['instagram-url'])) $instance['instagram-url'] = '';

        if(!isset($instance['color'])) $instance['color'] = '#fff';
        if(!isset($instance['hover-color'])) $instance['hover-color'] = '#e84855';

        include "template" . DIRECTORY_SEPARATOR . 'form.php';
    }

    public function update($new_instance, $old_instance){
        
        $instance = array();
        
        $instance['facebook-url'] = (isset($new_instance['facebook-url']) && !empty($new_instance['facebook-url']) ) ? esc_url($new_instance['facebook-url']) : '';   
        $instance['twitter-url'] = (isset($new_instance['twitter-url']) && !empty($new_instance['twitter-url']) ) ? esc_url($new_instance['twitter-url']) : '';   
        $instance['youtube-url'] = (isset($new_instance['youtube-url']) && !empty($new_instance['youtube-url']) ) ? esc_url($new_instance['youtube-url']) : '';   
        $instance['pinterest-url'] = (isset($new_instance['pinterest-url']) && !empty($new_instance['pinterest-url']) ) ? esc_url($new_instance['pinterest-url']) : '';   
        $instance['instagram-url'] = (isset($new_instance['instagram-url']) && !empty($new_instance['instagram-url']) ) ? esc_url($new_instance['instagram-url']) : '';   

        $instance['color'] = (isset($new_instance['color']) && !empty($new_instance['color']) ) ? sanitize_hex_color($new_instance['color']) : '';   
        $instance['hover-color'] = (isset($new_instance['hover-color']) && !empty($new_instance['hover-color']) ) ? sanitize_hex_color($new_instance['hover-color']) : '';   
        
        return $instance;
    }

}

endif;
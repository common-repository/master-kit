<?php 
// Security check
defined('ABSPATH') || die();

if( !class_exists('MasterKitPostSlider') ):

class MasterKitPostSliderWidget extends WP_Widget{

    public function __construct(){
        parent::__construct(
            'mkps_widget',
            __('MasterKit Post Slider', 'master-kit'),
            array(
                'description' => __('Adds post slider in your WordPress website.', 'master-kit'),
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
        
        $post_type = isset($instance['post-type']) && !empty($instance['post-type']) ? $instance['post-type'] : 'recent';
        $post_number = isset($instance['post-number']) && !empty($instance['post-number']) ? $instance['post-number'] : 6;
        
        if($post_type == 'recent'){

            $slider_posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => $post_number,
                'ignore_sticky_posts' => true,
            ));
    
        } else if($post_type == 'sticky'){

            $slider_posts = new WP_Query(array(
                'post_type' => 'post',
                'post__in' => get_option( 'sticky_posts' ),
                'posts_per_page' => $post_number,
            ));
    
        }

        echo $args['before_widget'];

        include "template" . DIRECTORY_SEPARATOR . 'carousel.php';
    
        echo $args['after_widget'];

        wp_reset_postdata();

    }

    public function form($instance){
        
        // Loading defaults
        if(!isset($instance['post-type']) || empty(isset($instance['post-type']))) $instance['post-type'] = 'recent';
        if(!isset($instance['post-number']) || empty(isset($instance['post-number']))) $instance['post-number'] = 6;

        include "template" . DIRECTORY_SEPARATOR . 'form.php';

    }
}

endif;
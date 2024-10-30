<?php 
// Security check
defined('ABSPATH') || die();

if( !class_exists('MasterKitAuthorWidget') ):

class MasterKitAuthorWidget extends WP_Widget{


    public function __construct(){
        parent::__construct(
            'mka_widget',
            __('MasterKit Author Widget', 'master-kit'),
            array(
                'description' => __('Widgetized author to show information about the author.', 'master-kit'),
                'customize_selective_refresh' => true,
            )
        );
        
        add_action('admin_enqueue_scripts', array(&$this, 'enqueue_scripts'));
    }

    public function enqueue_scripts(){
        wp_enqueue_media();
    }

    public function widget($args, $instance){
        
        $instance = $this->__init($instance);

        echo $args['before_widget'];
        include "template" . DIRECTORY_SEPARATOR . 'author.php';
        echo $args['after_widget'];
    }

    public function form($instance){

        
        $instance = $this->__init($instance);
        // $post_type_list = $this->post_type_list;

        // // $instance['title'] = (isset($instance['title']) && !empty($instance['title'])) ? $instance['title'] : '';
        // if(!isset($instance['title'])) $instance['title'] = '';
        include "template" . DIRECTORY_SEPARATOR . 'form.php';

    }

    private function __init($instance){
        if(!isset($instance['title'])) $instance['title'] = 'About the author';
        if(!isset($instance['name'])) $instance['name'] = 'Author Name';
        if(!isset($instance['avatar'])) $instance['avatar'] = '';
        if(!isset($instance['bio'])) $instance['bio'] = 'Details information about the author will go here.';
        if(!isset($instance['facebook-url'])) $instance['facebook-url'] = '';
        if(!isset($instance['twitter-url'])) $instance['twitter-url'] = '';
        if(!isset($instance['youtube-url'])) $instance['youtube-url'] = '';
        if(!isset($instance['pinterest-url'])) $instance['pinterest-url'] = '';
        if(!isset($instance['instagram-url'])) $instance['instagram-url'] = '';
        return $instance;
    }

}

endif;